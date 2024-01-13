<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return view('hello', ['name' => 'Laravel']);
});

Route::get('/word', function () {
    return view('hello.word', ['word' => 'Arief likes Laravel']);
});


Route::get('/comment', function () {
    return view('comment', []);
});
