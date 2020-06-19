<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function()
{
	Route::get('', 'PagesController@login')->name('adminlogin');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin-login');
	Route::get('dashboard', 'AdminController@index')->name('admin');
	Route::resource('education_levels', 'EducationLevels', [
    'names' => [
        'index' => 'education_levels',
        'create' => 'education_levels.create',
        'store' => 'education_levels.new',
        // etc...
    ]]);
	Route::resource('education_resources', 'EducationResources', [
    'names' => [
        'index' => 'education_resources',
        'create' => 'education_resources.create',
        'store' => 'education_resources.store',
        // etc...
    ]]);
	Route::get('learners', 'AdminController@learners')->name('learners');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
