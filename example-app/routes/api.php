<?php

use App\Http\Resources\LeagueCollection;
use App\Models\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeagueController;
use App\Http\Resources\LeagueResource;
use App\Http\Controllers\TeamController;
use App\Http\Resources\TeamResource;
use App\Http\Controllers\PlayerController;
use App\Http\Resources\PlayerResource;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// League
Route::get('/leagues', [LeagueController::class, 'index']);
Route::get('/leagues/{league}', [LeagueController::class, 'show']);
Route::get('/leagues/{league}/teams', [LeagueController::class, 'teams']);
Route::post('/leagues', [LeagueController::class, 'store']);
Route::put('/leagues/{league}', [LeagueController::class,'update']);
Route::delete('/leagues/{league}', [LeagueController::class,'delete']);

// Team
Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/{team}', [TeamController::class, 'show']);
Route::post('/teams', [TeamController::class, 'store']);
Route::put('/teams/{team}', [TeamController::class,'update']);
Route::delete('/teams/{team}', [TeamController::class,'delete']);

// Player
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{player}', [PlayerController::class, 'show']);
Route::post('/players', [PlayerController::class, 'store']);
Route::put('/players/{player}', [PlayerController::class,'update']);
Route::delete('/players/{player}', [PlayerController::class,'delete']);
