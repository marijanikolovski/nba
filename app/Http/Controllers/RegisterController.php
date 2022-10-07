<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Mail\MailVerified;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function create()
    {
        return view('auth.register');
    }

    public function store(CreateUserRequest $request)
    {
        $validated = $request->validated();

        $user = new User();

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        $user->save();

        Mail::to($user)->send(new MailVerified($user));

        return redirect('/login');
    }

    public function update($id) 
    {
        $user = User::find($id);

        $user->is_verified = true;
        $user->save();

        return view('auth.login', compact('user'));
    }
}
