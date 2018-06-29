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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return redirect('/');
});
Route::resource('interventions', 'InterventionsController')->middleware('auth');
Route::resource('members', 'MembersController')->middleware('auth');
Route::resource('notifications', 'NotificationsController')->middleware('auth');
Route::resource('users', 'UsersController')->middleware('auth');
