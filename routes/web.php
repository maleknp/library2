<?php

use Illuminate\Support\Facades\Route;



Route::get('/test',function(){
    return view('welcome');
});

Route::get('lang/{locale}', 'LangController@lang');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home'); // for logout


Route::get('/mada/{id}','AllController@index')->name('mada');
Route::get('/material/{id}','MaterialController@index')->name('material');
Route::get('/math','SectionsController@index1')->name('math');
Route::get('/nat','SectionsController@index2')->name('nat');
Route::get('/life','SectionsController@index3')->name('life');
Route::get('/earth','SectionsController@index4')->name('earth');
Route::get('/add','SectionsController@index5')->name('add')->middleware('auth');
Route::get('/contact','ContactController@index')->name('contact');
Route::get('/info/{id}','AllController@info')->name('info');

Route::post('/contact','ContactController@store')->name('contact');
//Admin pages

Route::get('/Additions','AdminController@add')->name('Additions')->middleware('auth');
Route::get('/users','AdminController@users')->name('users')->middleware('auth');
Route::delete('/delete/user/{id}', 'AdminController@delete')->name('delete-user')->middleware('auth');    //to delete department from database


//Admin Done


Route::get('/profile','ProfileController@index')->name('profile')->middleware('auth');
Route::get('/edit-profile','ProfileController@edit')->name('edit-profile')->middleware('auth');
Route::patch('/edit1/{id}', 'ProfileController@update')->name('edit1')->middleware('auth');    //to store new data of alls to data base

Route::get('/changePassword','ProfileController@showChangePasswordForm')->name('change-password')->middleware('auth');
Route::post('/changePassword','ProfileController@changePassword')->name('changePassword');



Route::post('/comment/auth','HomeController@commentsauth');   //store  data form users for send comments to database
Route::post('/new','MaterialController@store');  
Route::post('/search','HomeController@search');  



Route::get('/edit/{id}','AllController@edit')->name('edit')->middleware('auth');  //to edit all info
Route::delete('/delete/{id}', 'AllController@delete')->name('delete')->middleware('auth');    //to delete department from database
Route::patch('/update/{id}', 'AllController@update')->name('update');    //to store new data of alls to data base
Route::patch('/accept/{id}', 'AllController@accept')->name('accept');    //to store new data of alls to data base
Route::get('/download/{id}','AllController@download')->name('download')->middleware('auth');  //to download all info



Auth::routes();
Auth::routes(['register' => true]);

// language  
// Route::get('lang/{lang}','LangController@lang');

// Route::group(['middleware'=>'Lang'], function(){

// });



