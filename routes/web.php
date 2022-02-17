<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, 'live'])->name('quiz.live');
Route::get('/team/create', [Controller::class, 'createTeam'])->name('chooseTeam');
Route::post('/team/store', [Controller::class, 'storeTeam'])->name('storeTeam');
Route::post('/teams/logout', [Controller::class, 'logout'])->name('teams.logout');
Route::post('/quiz/send', [Controller::class, 'sendData'])->name('sendData');
Route::get('/scoreboard', [Controller::class, 'scoreboard'])->name('quiz.live.scoreboard');
