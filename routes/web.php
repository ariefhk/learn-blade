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

Route::get('/if', function () {
    return view('if', ["hobbies" => [
        "eat", "coding", "fishing"
    ]]);
});


Route::get('/unless', function () {
    return view('unless', ["isAdmin" => false]);
});

Route::get('/isset-empty', function () {
    return view('isset-empty', ['name' => "Arief Rachman Hakim"]);
});

Route::get('/env', function () {
    return view('env', []);
});
Route::get('/switch', function () {
    return view('switch', ['name' => "arief"]);
});
Route::get('/class', function () {
    return view('class', ['hobbies' => [
        [
            'name' => "Coding",
            'love' => true
        ],
        [
            'name' => "Gaming",
            'love' => false
        ],
    ]]);
});

Route::get('/include', function () {
    return view('layouts.body', ['title' => "test include", 'user' => 'guest', 'admin' => 'arief']);
});
