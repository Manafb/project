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

Route::get('ControlPanel/College/create');
Route::get('ControlPanel/College');



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
    Route::prefix("Module")->group(function (){
        Route::get('/', function (){
            return view("ControlPanel.Module.index");
        })->name('module.index');
        Route::get('/create', function (){
            return view("ControlPanel.Module.create");
        })->name('module.create');
    });
    Route::prefix("User")->group(function (){
        Route::get('/', function (){
            return view("ControlPanel.User.index");
        })->name('user.index');
        Route::get('/create', function (){
            return view("ControlPanel.User.create");
        })->name('user.create');
    });
    Route::prefix("Student")->group(function (){
        Route::get('/', function (){
            return view("ControlPanel.Student.index");
        })->name('student.index');
        Route::get('/create', function (){
            return view("ControlPanel.Student.create");
        })->name('student.create');
    });
    Route::prefix("Xvoice")->group(function (){
        Route::get('/', function (){
            return view("ControlPanel.Xvoice.index");
        })->name('xvoice.index');
        Route::get('/read', function (){
            return view("ControlPanel.Xvoice.read");
        })->name('xvoice.read');
    });

});

Route::get('/', function (){
    return view("test");
})->name('test');

