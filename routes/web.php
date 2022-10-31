<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\AppController;
use App\Models\promotions;
use App\Models\apprenants;




Route::get('/', function () {
    return 'welcome';
});

Route::get('/index', [MyController::class , 'select']);

Route::get('/add', [MyController::class , 'add']);

Route::get('/insert', [MyController::class , 'insert']);

Route::get('/update/{id}', [MyController ::class,'update' ]);

Route::get('/edit/{id}', [ MyController::class,'edit']);

Route::get('search/{name}',[MyController::class,'search']);

Route::get('search',[MyController::class,'search']);

Route::get('/delete', [ MyController::class,'delete' ]);




Route::get('/addapp/{id}', [MyController::class ,'addapp']);
Route::get('/insertapp', [MyController::class , 'insertapp']);
Route::get('/edit-app/{id}', [ MyController::class,'editapp' ]);

