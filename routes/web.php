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
    return view('index');
});

Auth::routes();

//front
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/empresas', 'HomeController@serviceCompanie')->name('home.companies');
Route::get('/areas/{id}', 'HomeController@serviceArea')->name('home.areas');
Route::get('/chivos/{id}', 'HomeController@serviceFiles')->name('home.files');

//Users
Route::resource('/users', 'UsersController')->except('create', 'edit');

//Companies
Route::get('/companie', 'CompanieController@indexCompanie')->name('companies');
Route::get('/companies', 'CompanieController@index')->name('companies.index');
Route::post('/companies', 'CompanieController@store')->name('companies.store');
Route::get('/companies/{companie}', 'CompanieController@show')->name('companies.show');
Route::put('/companies/{companie}', 'CompanieController@update')->name('companies.update');
Route::delete('/companies/{companie}', 'CompanieController@destroy')->name('companies.destroy');

//Areas
Route::get('/area', 'AreaController@indexArea')->name('areas');
Route::resource('/areas', 'AreaController')->except('create', 'edit');

//Files
Route::resource('/documents', 'DocumentController')->except('create', 'edit');
Route::get('/document', 'DocumentController@indexDocument')->name('documents');






