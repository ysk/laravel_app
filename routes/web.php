<?php


Route::get('hello', 'HelloController@index')->name('hello.index');
Route::post('hello', 'HelloController@post')->name('hello.post');

Route::get('hello/add', 'HelloController@add')->name('hello.add');
Route::post('hello/add', 'HelloController@create')->name('hello.create');

Route::get('hello/edit', 'HelloController@edit')->name('hello.edit');
Route::post('hello/edit', 'HelloController@update')->name('hello.update');

Route::get('hello/del', 'HelloController@del')->name('hello.del');
Route::post('hello/del', 'HelloController@remove')->name('hello.remove');