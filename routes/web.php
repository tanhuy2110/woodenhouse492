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


Route::get('admin/login', 'LoginController@getLogin');
Route::post('admin/login', 'LoginController@postLogin');
Route::get('admin/logout', 'LoginController@getLogout');

Route::group(['prefix'=>'/admin', 'middleware' => 'adminLogin'],function(){
    Route::get('/dashboard', 'DashboardController@getPage');
    Route::get('/listCategory', 'CategoryController@listCategory');
    Route::resource('/category', 'CategoryController');
    Route::get('/reservation', 'ReservationController@listReservationAdmin');
    Route::get('/calendar', 'ReservationController@reservationCalendar');
    Route::get('/calendarAPI', 'ReservationController@reservationCalendarAPI');
    Route::resource('/blog', 'BlogController');
    Route::get('/user', 'UserController@index');
    Route::resource('/menu', 'MenuController');
});

Route::group(['prefix'=>'/'],function(){
    Route::get('/', function () {
        return view('custommer.layout.home');
    });
    Route::get('/menu', 'MenuController@listMenuCustomer');
    Route::get('/about', function () {
        return view('custommer.layout.about');
    });
    Route::get('/review', function () {
        return view('custommer.layout.review');
    });
    Route::resource('/reservation', 'ReservationController');
});