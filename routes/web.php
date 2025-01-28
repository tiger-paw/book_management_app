<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UsersController;


Route::get('/', function () {
    return view('user_management_index');
});

Route::get('/db/user_management_index',[UsersController::class,'index']);

Route::get('/db/user_management_create',[UsersController::class,'create']);
Route::post('/db/user_management_store',[UsersController::class,'store']);

Route::get('/db/user_management_erase',[UsersController::class,'erase']);
Route::post('/db/user_management_erase',[UsersController::class,'erase']);
Route::post('/db/user_management_delete',[UsersController::class,'delete']);