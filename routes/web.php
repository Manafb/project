<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix("ControlPanel")->group(function (){
    Route::prefix("College")->group(function (){
        Route::get('/', function (){
            return view("ControlPanel.College.index");
        })->name('college.index');
        Route::get('/create', function (){
            return view("ControlPanel.College.create");
        })->name('college.create');
    });

    Route::prefix("Major")->group(function (){
        Route::get('/', function (){
            return view("ControlPanel.Major.index");
        })->name('major.index');
        Route::get('/create', function (){
            return view("ControlPanel.Major.create");
        })->name('major.create');
    });
});

Route::get('/', function (){
    return view("test");
})->name('test');

