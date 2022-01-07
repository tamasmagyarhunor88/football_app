<?php

use App\Http\Controllers\LeagueController;
use App\Http\Controllers\TeamController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teams/home', [TeamController::class, 'home'])->name('home');

Route::post('/teams', [TeamController::class, 'store'])->name('teams');

Route::get('/leagues/{league}/teams', [LeagueController::class, 'teams'])->name('leagueTeams');

Route::get('/leagues/home', [LeagueController::class, 'home'])->name('home');

Route::post('/leagues', [LeagueController::class, 'store'])->name('leagues');

