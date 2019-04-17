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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas

Route::middleware(['auth'])->group(function() {


      //Users
      Route::get('users', 'UserController@index')->name('users.index')
      ->middleware('permission:users.index');
  
      Route::put('users/{users}', 'UserController@update')->name('users.update')
      ->middleware('permission:users.edit');
  
      Route::get('users/{users}', 'UserController@show')->name('users.show')
      ->middleware('permission:users.show');
  
      Route::delete('users/{users}', 'UserController@destroy')->name('users.destroy')
      ->middleware('permission:users.destroy');
  
      Route::get('users/{users}/edit', 'UserController@edit')->name('users.edit')
      ->middleware('permission:users.edit');
  

    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{roles}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //Iglesias
    Route::post('iglesias/store', 'IglesiasController@store')->name('iglesias.store')
        ->middleware('permission:iglesias.create');

    Route::get('iglesias', 'IglesiasController@index')->name('iglesias.index')
    ->middleware('permission:iglesias.index');

    Route::get('iglesias/create', 'IglesiasController@create')->name('iglesias.create')
    ->middleware('permission:iglesias.create');

    Route::put('iglesias/{iglesias}', 'IglesiasController@update')->name('iglesias.update')
    ->middleware('permission:iglesias.edit');

    Route::get('iglesias/{iglesias}', 'IglesiasController@show')->name('iglesias.show')
    ->middleware('permission:iglesias.show');

    Route::delete('iglesias/{iglesias}', 'IglesiasController@destroy')->name('iglesias.destroy')
    ->middleware('permission:iglesias.destroy');

    Route::get('iglesias/{iglesias}/edit', 'IglesiasController@edit')->name('iglesias.edit')
    ->middleware('permission:iglesias.edit');


    



    





});