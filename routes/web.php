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

//Unused useful code

// Home page
Route::get('/', function () {
    return view('welcome');
});
    //Public Index
Route::get('/', ['uses' => 'Admin\HomeCrudController@publicIndex']);
Route::post('/allmusicians', ['uses' => 'Admin\HomeCrudController@musicianindex']);
Route::post('/allbands', ['uses' => 'Admin\HomeCrudController@bandindex']);

//Home Controllers
Route::get('/signin', ['uses' => 'Admin\HomeCrudController@signin']);
Route::get('/signup', ['uses' => 'Admin\HomeCrudController@signup']);
Route::get('/signout', ['uses' => 'Admin\HomeCrudController@signout']);

Route::get('/searchmusician', ['uses' => 'Admin\HomeCrudController@searchmusician']);
Route::get('/searchband', ['uses' => 'Admin\HomeCrudController@searchband']);

//Profile Controllers
Route::get('/profile/{username}', 'Admin\ProfileCrudController@getprofile')->name('profile.show');
Route::get('/band/{bandname}', 'Admin\ProfileCrudController@getband')->name('band.show');

// Musician Controllers
Route::get('/musician', ['uses' => 'Admin\MusicianCrudController@profile']);
Route::post('/submitLogin', ['uses' => 'Admin\MusicianCrudController@login']);
Route::post('/profileaddsave', ['uses' => 'Admin\ProfileCrudController@profileaddsave']);

// Band Controllers
Route::get('/band', ['uses' => 'Admin\BandCrudController@profile']);
Route::post('/submitbandLogin', ['uses' => 'Admin\BandCrudController@login']);
Route::post('/bandaddsave', ['uses' => 'Admin\ProfileCrudController@bandaddsave']);

// Profile edit
Route::get('/modifymusician', ['uses' => 'Admin\MusicianCrudController@modifymusician']);
Route::post('/musicianupdate', ['uses' => 'Admin\MusicianCrudController@musicianupdate']);
Route::get('/modifyband', ['uses' => 'Admin\BandCrudController@modifyband']);
Route::post('/bandupdate', ['uses' => 'Admin\BandCrudController@bandupdate']);