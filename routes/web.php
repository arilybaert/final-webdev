<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}',
'where' => ['language' => '[a-zA-Z]{2}'],
'middleware' => 'setLocale']
        , function () {
            Route::get('/', 'HomeController@getIndex')->name('home');

            Route::get('/blogs', 'BlogsController@getIndex')->name('blogs');
            Route::get('/blogs/{blog}', 'BlogsController@getBlog')->name('blog.show');
            
            Route::get('/donations', 'DonationController@getIndex')->name('donations');
            
            Route::get('/about', 'AboutController@getIndex')->name('about');
            
            Route::get('/contact', 'ContactController@getIndex')->name('contact');
            
            Route::get('/privacy', 'PrivacyController@getIndex')->name('privacy');
});



// Route::get('/test', function () {
//     App::setLocale('eng');
//     dd(App::getLocale());
// });