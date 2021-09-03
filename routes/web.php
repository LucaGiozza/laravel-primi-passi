<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

 Route::get('serie', function () {
     return view('serie-tv');
 })->name('serie-tv');


 Route::get('/actors', function () {
     return view('attori');
 })->name('attori');

 Route::get('/genere-serie', function () {
     $data =[
         'genere' => 'genere-serie',
         'anno-serie' => 'Serie netflix 2021'

     ];
    return view('genere', $data);
})->name('genere');
