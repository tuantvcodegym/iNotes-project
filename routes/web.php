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

Route::get('index', 'NoteTypeController@store')->name('type.index');
Route::post('index', 'NoteTypeController@create')->name('type.create');

Route::get('noteStore', 'NoteController@store')->name('note.store');
Route::post('noteStore', 'NoteController@create')->name('note.create');

Route::get('list', 'NoteController@listNote')->name('note.list');
Route::get('detail/{id}', 'NoteController@detail')->name('note.detail');
Route::get('destroy/{id}', 'NoteController@destroy')->name('note.destroy');
Route::get('edit/{id}', 'NoteController@edit')->name('note.edit');
Route::post('edit/{id}', 'NoteController@update')->name('note.update');
Route::post('search', 'NoteController@search')->name('note.search');