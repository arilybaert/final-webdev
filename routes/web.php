<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('/blogs', 'BlogsController@getIndex')->name('blogs');
Route::get('/blogs/{blog}', 'BlogsController@getBlog')->name('blog.show');

Route::get('/donations', 'DonationController@getIndex')->name('donations');

Route::get('/about', 'AboutController@getIndex')->name('about');

Route::get('/contact', 'ContactController@getIndex')->name('contact');

Route::get('/privacy', 'PrivacyController@getIndex')->name('privacy');

