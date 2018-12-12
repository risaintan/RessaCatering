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

Route::get('/makanan_box', 'MakananController@index')->name('makanan.index');
Route::post('/makanan_box', 'MakananController@storeMakanan')->name('makanan.pesan');

Route::get('/snack_box', 'SnackController@index');
Route::post('/snack_box', 'SnackController@storeSnack')->name('snack.pesan');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::group(['middleware'=>['auth', 'admin']], function(){
    Route::get('admin/input-menu', 'AdminController@showmenu')->name('admin.input');
});

Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
Route::patch('/{id}/profile', 'ProfileController@update')->name('profile.update');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/haha', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('beranda');
});

Route::get('/wedding', function () {
    return view('wedding');
});

Route::get('/prasmanan', function () {
    return view('prasmanan');
});


Route::get('/partner', function () {
    return view('partner');
});

Route::get('/gallery', function () {
    return view('gallery');
});





Auth::routes();

Route::get('/beranda', 'HomeController@index')->name('home');

Route::get('admin-login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@adminLogin');


