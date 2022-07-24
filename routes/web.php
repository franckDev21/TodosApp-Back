<?php

use App\Models\TodoList;
use App\Models\User;
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
    $users = User::with(['todoLists'])->get();
    // $user = User::with(['todoLists'])->find(1);
    
    return view('welcome',compact('users'));
});
