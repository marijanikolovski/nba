<p>Hello, {{ $user->name }}</p>

<p>Please verified your email <a href="{{ route('verification', ['id' => $user->id ]) }}">here</a></p>
