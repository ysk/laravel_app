<?php


Route::get('hello', 'HelloController@index')->name('hello.index');
Route::post('hello', 'HelloController@post')->name('hello.post');

Route::get('hello/add', 'HelloController@add')->name('hello.add');
Route::post('hello/add', 'HelloController@create')->name('hello.create');

Route::get('hello/edit', 'HelloController@edit')->name('hello.edit');
Route::post('hello/edit', 'HelloController@update')->name('hello.update');

Route::get('hello/del', 'HelloController@del')->name('hello.del');
Route::post('hello/del', 'HelloController@remove')->name('hello.remove');

Route::get('hello/show', 'HelloController@show')->name('hello.show');

Route::get('person', 'PersonController@index')->name('person.index');

Route::get('person/find', 'PersonController@find')->name('person.find');
Route::post('person/find', 'PersonController@search')->name('person.search');

Route::get('person/add', 'PersonController@add')->name('person.add');
Route::post('person/add', 'PersonController@create')->name('person.create');


Route::get('person/edit', 'PersonController@edit')->name('person.edit');
Route::post('person/edit', 'PersonController@update')->name('person.update');


Route::get('person/del', 'PersonController@del')->name('person.del');
Route::post('person/del', 'PersonController@remove')->name('person.remove');


Route::get('board', 'BoardController@index')->name('board.index');
Route::get('board/add', 'BoardController@add')->name('board.add');
Route::post('board/add', 'BoardController@create')->name('board.create');

