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

Route::get('/', 'UploadController@uploadForm');
Route::get('/album', function(){
    return redirect()->back()->with('warning',['Comming soon!']);
})->name('album');
Route::post('/uploads', 'UploadController@uploadSubmit')->name('postupload');
Route::get('test', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
});