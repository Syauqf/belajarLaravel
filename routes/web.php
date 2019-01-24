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
Route::get('/lemot', function () {
    echo"kenapa kok lemot";
});
Route::get('/rumah', function () {
    echo"disini omah";
});
Route::get('/sama', function () {
    return "sama saja sami mawon";
});
Route::get('/terong', 'CapungController@index');
Route::get('/brokoli', 'CapungController@Pujangga');
Route::get('/brokoli/dewa', 'CapungController@siti');


Route::get('/home', 'HomeController@Index');
Route::get('/home/list', 'HomeController@List');
Route::get('/ukik', 'HomeController@Ukik');

//Route::get('/customer', 'CustomerController@index');
//Route::get('/customer/create', 'CustomerController@create');
//Route::get('/customer/store', 'CustomerController@store');

Route::resource('customer', 'CustomerController');
Route::resource('supplier', 'SupplierController');
Route::resource('employee', 'EmployeeController');
Route::get('/Layout','LayoutController@index');

//Route::get('/supplier', 'SupplierController@index');

Route::get('/karyawan', 'KaryawanController@index');
Route::get('/products', 'ProductsController@index');

