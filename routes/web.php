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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/salons', 'HomeController@getAllSalons')->name('salons');

Route::get('/music-groups', 'HomeController@getAllMusicGroups')->name('music-groups');

Route::get('/admin', 'AdminController@index')->middleware('adminMiddleware')->name('admin.index');

Route::get('/admin/users', 'AdminController@users')->middleware('adminMiddleware')->name('admin.users');

Route::get('/admin/user/{userId}', 'AdminController@singleUser')->middleware('adminMiddleware')->name('admin.single-user');

Route::post('/admin/user/{userId}', 'AdminController@updateUser')->middleware('adminMiddleware')->name('admin.update-user');

Route::get('/admin/salons/all', 'AdminController@salons')->middleware('adminMiddleware')->name('admin.salons');

Route::get('/admin/salons/create', 'AdminController@renderCreateTemplate')->middleware('adminMiddleware')->name('admin.render-salon-create');

Route::post('/admin/salons/create', 'AdminController@createSalon')->middleware('adminMiddleware')->name('admin.create-salon');

Route::get('/admin/salons/get/{salonId}', 'AdminController@getSalon')->middleware('adminMiddleware')->name('admin.get-salon');

Route::post('/admin/salons/update/{salonId}', 'AdminController@updateSalon')->middleware('adminMiddleware')->name('admin.update-salon');

Route::get('/admin/salons/delete/{salonId}', 'AdminController@deleteSalon')->middleware('adminMiddleware')->name('admin.delete-salon');

Route::get('/admin/music-groups/all', 'AdminController@getAllMusicGroups')->middleware('adminMiddleware')->name('admin.music-groups');

Route::get('/admin/music-groups/create', 'AdminController@renderCreateMusicGroupTemplate')->middleware('adminMiddleware')->name('admin.render-music-group-create');

Route::post('/admin/music-groups/create', 'AdminController@createMusicGroup')->middleware('adminMiddleware')->name('admin.create-music-group');

Route::get('/admin/music-group/get/{groupId}', 'AdminController@getMusicGroup')->middleware('adminMiddleware')->name('admin.get-music-group');

Route::post('/admin/music-group/update/{groupId}', 'AdminController@updateMusicGroup')->middleware('adminMiddleware')->name('admin.update-music-group');

Route::get('/admin/music-groups/delete/{groupId}', 'AdminController@deleteMusicGroup')->middleware('adminMiddleware')->name('admin.delete-music-group');

Auth::routes();
