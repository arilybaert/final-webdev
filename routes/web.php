<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}',
'where' => ['language' => '[a-zA-Z]{2}'],
'middleware' => 'setLocale']
        , function () {
            Route::get('/', 'HomeController@getIndex')->name('home');

            Route::get('/blogs', 'BlogsController@getIndex')->name('blogs');
            Route::get('/blogs/{blog?}', 'BlogsController@getBlog')->name('blog.show');
            
            Route::get('/donations', 'DonationController@getIndex')->name('donations');
            
            Route::get('/about', 'AboutController@getIndex')->name('about');
            
            Route::get('/contact', 'ContactController@getIndex')->name('contact');
            
            Route::get('/privacy', 'PrivacyController@getIndex')->name('privacy');

            Route::get('/newsletter','NewsletterController@create')->name('newsletter');
            Route::post('/newsletter','NewsletterController@store');
});




// Route::get('/test', function () {
//     App::setLocale('eng');
//     dd(App::getLocale());
// });

Auth::routes();
Route::get('/admin', 'AdminController@getIndex')->name('admin');

Route::get('/admin/blogs', 'AdminController@getBlogs')->name('admin.blogs');
Route::get('/admin/blogs/{blog}', 'AdminController@editBlogs')->name('admin.blogs.edit');

Route::post('/admin/blogs/save', 'AdminController@postSave')->name('admin.blogs.save');

Route::get('/admin/blogs/delete/{id}', 'AdminController@postDelete')->name('admin.blogs.delete');


Route::get('/admin/donations', 'AdminController@getIndex')->name('admin.donations');

Route::get('/admin/about', 'AdminController@getIndex')->name('admin.about');


Route::get('/admin/contact', 'AdminController@getIndex')->name('admin.contact');

Route::get('/admin.privacy', 'AdminController@getIndex')->name('admin.privacy');
