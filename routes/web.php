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

//Directory Path for welcome Pages
Route::get('/pages/welcome', function () {
    return view('welcome');
});

//Directory Path for contact pages
Route::get('/pages/contact', 'ContactFormController@contactForm');
Route::post('/pages/contact', ['as'=>'contactform.store','uses'=>'ContactFormController@contactFormPost']);

//Directory Path for retrieve result from Contact Pages
Route::get('/pages/contact_message', 'ContactFormController@contactMessage');

