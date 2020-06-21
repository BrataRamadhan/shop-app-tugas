<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Auth Routing
Auth::routes();

// Client Routing
Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');


// Admin Routing
Route::middleware('is_admin')->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/admin/data_barang', 'AdminController@dataBarang')->name('data_barang');
    Route::get('/admin/kategori', 'AdminController@dataKategori')->name('data_kategori');
    // add barang
    // Route::get('/addBarang', 'AdminController@createBarang')->name('create');
    Route::get('/admin/tambah_barang', 'AdminController@tambah_barang')->name('create');
    Route::post('/admin/tambah_barang', 'BarangController@store')->name('store');
    // edit barang
    Route::get('/admin/edit_barang/{id}', 'AdminController@edit_barang')->name('edit');
    Route::put('/admin/update-data/{id}', 'BarangController@update')->name('update-data');
    // Hapus Barang
    Route::delete('delete/{id}', 'BarangController@delete')->name('delete');
});
