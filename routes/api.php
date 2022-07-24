<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TodoController;
use App\Http\Controllers\API\TodoListController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('users', [UserController::class,'index']);
Route::post('login', [AuthController::class,'login']);
Route::post('register', [AuthController::class,'register']);

Route::group([ 'middleware' => 'api'], function ($router) {
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh',[AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

    Route::get('/todos/{user_id}',[TodoListController::class,'index']);
    Route::post('/todo_list/{user_id}/new',[TodoListController::class,'store']);
    Route::delete('/todo_list/{todoList}/delete',[TodoListController::class,'destroy']);

    Route::post('/todo/{todo_list_id}/new',[TodoController::class,'store']);
    Route::patch('/todo/{todo_id}/toggle',[TodoController::class,'toggle']);
    Route::delete('/todo/{todo}/delete',[TodoController::class,'destroy']);

    
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
