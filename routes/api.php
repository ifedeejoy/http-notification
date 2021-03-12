<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TopicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('topics', [TopicController::class, 'index']);
Route::get('subscribers', [SubscriptionController::class, 'index']);
Route::get('messages', [MessageController::class, 'index']);
Route::get('message/{message}', [MessageController::class, 'show']);
Route::post('topics', [TopicController::class, 'store']);
Route::post('subscribe/{topic}', [SubscriptionController::class, 'store']);
Route::post('publish/{topic}', [MessageController::class, 'store']);
