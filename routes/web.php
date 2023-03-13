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
    return view('index');
});
Route::get('/dienstleistungen', function () {
    return view('dienstleistungen');
});
Route::get('/honorar', function () {
    return view('honorar');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/impressum', function () {
    return view('impressum');
});
Route::get('/datenschutzerklaerung', function () {
    return view('datenschutzerklaerung');
});
