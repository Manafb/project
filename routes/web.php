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











Route::get('/', function (){
    return view("test");
})->name('test');


Route::prefix("ControlPanel")->group(function (){

    Route::prefix("College")->group(function (){
        Route::get('/','College\CollegeController@index')->name('college.index');
        Route::get('/create','College\CollegeController@create')->name('college.create');
        Route::post('/store','College\CollegeController@store')->name('college.store');

        Route::get('/edit/{id}','College\CollegeController@edit')->name('college.edit');
        Route::post('/edit/{id}','College\CollegeController@update')->name('college.update');
        Route::post('/destroy','College\CollegeController@destroy')->name('college.destroy');
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
