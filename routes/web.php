<?php


Route::get('/','EiserController@index')->name('/');



Route::get('/category','EiserController@category')->name('category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add', 'CategoryController@addCategory')->name('add-category');

Route::post('/category/new','CategoryController@newCategory')->name('new-category');

Route::get('/category/manage','CategoryController@manageCategory')->name('manage-category');



Route::get('/category/published/{id}','CategoryController@publishedCategory')->name('published-category');


Route::get('/category/unpublished/{id}','CategoryController@unpublishedCategory')->name('unpublished-category');

