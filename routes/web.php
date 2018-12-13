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

Route::get('/snack_box', 'SnackController@index')->name('snack.index');
Route::post('/snack_box', 'SnackController@storeSnack')->name('snack.pesan');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/input-menu', 'AdminController@showmenu')->name('admin.input');
Route::post('/admin/input-menu', 'AdminController@storeFood')->name('admin.store');
Route::delete('/admin/input-menu/{id}/destroy', 'AdminController@delete')->name('admin.delete');
Route::delete('/admin/{id}/destroy', 'AdminController@destroy')->name('admin.destroy');
Route::delete('/admin/{id}/destroy2', 'AdminController@destroy2')->name('admin.destroy2');


Route::get('/profile','ProfileController@show')->name('profile');
Route::get('/profile_pesanan','ProfileController@pesanan')->name('profile.pesanan');
Route::PATCH('/profile', 'ProfileController@update')->name('profile.update');
Route::delete('/profile/{id}/destroy', 'ProfileController@destroy')->name('profile.destroy');
Route::delete('/profile/{id}/destroy2', 'ProfileController@destroy2')->name('profile.destroy2');


Route::get('/', function () {
    return view('beranda');
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


