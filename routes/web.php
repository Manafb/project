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



Route::prefix("Group")->group(function (){

    Route::get('/{id}','Website\Group\GroupController@index')->name('website.group.index');
    Route::post('/post/delete/','Website\Group\GroupController@deletePost')->name('website.group.deletePost');
    Route::post('/post/{group_id}/comment/{post_id}','Website\Group\GroupController@createComment')->name('website.group.createComment');
    Route::post('/post/{id}','Website\Group\GroupController@createPost')->name('website.group.createPost');
    Route::post('/post/edit/{id}','Website\Group\GroupController@editPost')->name('website.group.editPost');
    Route::post('/comment/edit/{id}','Website\Group\GroupController@editComment')->name('website.group.editComment');
    Route::post('/comment/delete','Website\Group\GroupController@deleteComment')->name('website.group.deleteComment');

});


Route::prefix("ControlPanel")->group(function (){

    Route::prefix("Ajax")->group(function (){
        Route::post('/ajax_getMajorByCollege','Ajax\AjaxController@getMajorByCollege')->name('ajax.getMajorByCollege');
    });
    Route::prefix("College")->group(function (){
        Route::get('/','College\CollegeController@index')->name('college.index');
        Route::get('/create','College\CollegeController@create')->name('college.create');
        Route::post('/store','College\CollegeController@store')->name('college.store');

        Route::get('/edit/{id}','College\CollegeController@edit')->name('college.edit');
        Route::post('/edit/{id}','College\CollegeController@update')->name('college.update');
        Route::post('/destroy','College\CollegeController@destroy')->name('college.destroy');
    });

    Route::prefix("Major")->group(function (){
        Route::get('/','Major\MajorController@index')->name('major.index');
        Route::get('/create','Major\MajorController@create')->name('major.create');
        Route::post('/store','Major\MajorController@store')->name('major.store');

        Route::get('/edit/{id}','Major\MajorController@edit')->name('major.edit');
        Route::post('/edit/{id}','Major\MajorController@update')->name('major.update');
        Route::post('/destroy','Major\MajorController@destroy')->name('major.destroy');



    });
    Route::prefix("Module")->group(function (){
        Route::get('/','Module\ModuleController@index')->name('module.index');
        Route::get('/create','Module\ModuleController@create')->name('module.create');
        Route::post('/store','Module\ModuleController@store')->name('module.store');

        Route::get('/edit/{id}','Module\ModuleController@edit')->name('module.edit');
        Route::post('/edit/{id}','Module\ModuleController@update')->name('module.update');
        Route::post('/destroy','Module\ModuleController@destroy')->name('module.destroy');


    });
    Route::prefix("User")->group(function (){
        Route::get('/','User\UserController@index')->name('user.index');
        Route::get('/create','User\UserController@create')->name('user.create');
        Route::post('/store','User\UserController@store')->name('user.store');

        Route::get('/edit/{id}','User\UserController@edit')->name('user.edit');
        Route::post('/edit/{id}','User\UserController@update')->name('user.update');
        Route::post('/destroy','User\UserController@destroy')->name('user.destroy');

    });
    Route::prefix("Student")->group(function (){
        Route::get('/','Student\StudentController@index')->name('student.index');
        Route::get('/create','Student\StudentController@create')->name('student.create');
        Route::post('/store','Student\StudentController@store')->name('student.store');

        Route::get('/edit/{id}','Student\StudentController@edit')->name('student.edit');
        Route::post('/edit/{id}','Student\StudentController@update')->name('student.update');
        Route::post('/destroy','Student\StudentController@destroy')->name('student.destroy');
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
