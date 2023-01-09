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
    return view(
        'pages.home',
        array(
            'header' => 'home',
        )
    );
});
Route::get('/properties', function () {
    return view(
        'pages.properties',
        array(
            'header' => 'properties',
        )
    );
});
Route::get('/about', function () {
    return view(
        'pages.about',
        array(
            'header' => 'about',
        )
    );
});
Route::get('/contact', function () {
    return view(
        'pages.contact',
        array(
            'header' => 'contact',
        )
    );
});
Route::get('/mondrian', function () {
    return view(
        'pages.mondrian_property',
        array(
            'header' => 'properties',
        )
    );
});
