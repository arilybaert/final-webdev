<?php

use Illuminate\Support\Facades\Route;


// Mollie route
Route::name('webhooks.mollie')->any('webhooks/mollie', 'WebhookController@handle');

Route::redirect('/', '/en');

// Client routes
Route::group(['prefix' => '{language}',
'where' => ['language' => '[a-zA-Z]{2}'],
'middleware' => 'setLocale']
        , function () {
            Route::get('/', 'HomeController@getIndex')->name('home');
            Route::get('/home', 'HomeController@getIndex')->name('home');

            Route::get('/blogs', 'BlogsController@getIndex')->name('blogs');
            Route::get('/blogs/{blog?}', 'BlogsController@getBlog')->name('blog.show');

            Route::any('/donations', 'DonationController@getIndex')->name('donations');
            Route::post('/donations/payment', 'DonationController@donationPayment')->name('donations.payment');

            Route::get('/donations/succes', 'DonationController@getSucces')->name('donations.succes');


            Route::get('/about', 'AboutController@getIndex')->name('about');

            Route::get('/contact', 'ContactController@getIndex')->name('contact');
            Route::post('/contact', 'ContactController@postContact')->name('contact.save');

            Route::get('/privacy', 'PrivacyController@getIndex')->name('privacy');

            Route::get('/newsletter','NewsletterController@create')->name('newsletter');
            Route::post('/newsletter','NewsletterController@store');

            Route::get('/{page?}', 'PagesController@getPage')->name('page');
});


// Admin routes

Auth::routes();

Route::get('/admin', 'AdminController@getIndex')->name('admin');

Route::get('admin/pages', 'AdminController@getIndexPages')->name('admin.pages.index');
Route::get('admin/pages/create', 'AdminController@getCreatePage')->name('admin.pages.create');
Route::post('admin/pages/create','AdminController@postCreatePage')->name('admin.pages.create');
Route::get('admin/pages/edit/{page}', 'AdminController@getEditPage')->name('admin.pages.edit');
Route::post('admin/pages/edit/{page}','AdminController@postEditPage')->name('admin.pages.edit');
Route::post('admin/pages/delete/{page}', 'AdminController@postDeletePage')->name('admin.pages.delete');

Route::get('/admin/album/edit/{album?}', 'AdminController@editAlbums')->name('admin.album.edit');
Route::post('/admin/album/save', 'AdminController@albumSave')->name('admin.album.save');
Route::get('/admin/album/delete/{id}', 'AdminController@albumDelete')->name('admin.album.delete');

Route::get('/admin/topTenSong/edit/{song?}', 'AdminController@editTopTenSong')->name('admin.topTenSong.edit');
Route::get('/admin/topTenSong/delete/{id}', 'AdminController@topTenSongDelete')->name('admin.topTenSong.delete');
Route::post('/admin/topTenSong/save', 'AdminController@topTenSongSave')->name('admin.topTenSong.save');


Route::get('/admin/blogs', 'AdminController@getBlogs')->name('admin.blogs');
Route::get('/admin/blogs/create/{blog?}', 'AdminController@editBlogs')->name('admin.blogs.edit');
Route::post('/admin/blogs/save', 'AdminController@postSave')->name('admin.blogs.save');
Route::get('/admin/blogs/delete/{id}', 'AdminController@postDelete')->name('admin.blogs.delete');


Route::get('/admin/donations', 'AdminController@getDonations')->name('admin.donations');
Route::get('/admin/donations/edit/{donation?}', 'AdminController@editDonations')->name('admin.donations.edit');
Route::post('/admin/donations/save', 'AdminController@donationSave')->name('admin.donations.save');
Route::get('/admin/donations/delete/{id}', 'AdminController@donationDelete')->name('admin.donations.delete');


Route::get('/admin/apikey', 'AdminController@getKey')->name('admin.apikey');
Route::post('/admin/apikey/save', 'AdminController@keySave')->name('admin.apikey.save');
Route::get('/admin/apikey/delete/{id}', 'AdminController@keyDelete')->name('admin.apikey.delete');
