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
Route::post('/upload', 'UploadController@uploadSubmit')->name('postupload');
Route::get('test', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
});
Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
