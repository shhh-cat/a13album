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
    return view('main');
})->middleware('auth')->name('main');
Route::get('followList', 'FollowController@index');
Route::get('follow/{time?}', 'FollowController@store');
Route::get('/dang-nhap', function () {
    return view('login');
})->name('dang-nhap') ;
Route::get('auth/facebook', 'FacebookAuthController@redirectToProvider')->name('facebook.login') ;
Route::get('auth/facebook/callback', 'FacebookAuthController@handleProviderCallback');

Route::get('profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');
Route::get('/upload', 'UploadController@uploadForm')->name('getupload');
Route::get('/album', 'AlbumController@showAll')->name('album');
Route::get('/manager', function () {
    return view('manager');
})->middleware('auth')->name('manager');

Route::post('/upload', 'UploadController@store')->name('storeimage');
Route::post('/upload/delete', 'UploadController@delete')->name('deleteimage');

Route::get('test', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
});
Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lythuyetly/{chuong?}', 'LythuyetLyController@show')->name('ly');