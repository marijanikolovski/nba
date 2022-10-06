<?php

use App\Http\Controllers\PlayersControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TeamsController::class, 'index']);
Route::get('/teams/{id}', [TeamsController::class, 'show'])->name('teams-show');

Route::get('/player/{id}', [PlayersControllers::class, 'show'])->name('players-show');
