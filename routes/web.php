<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\MailController;
use App\Http\Controllers\EmailController;

  
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
Route::get('/partners', function () {
    return view(
        'pages.partners',
        array(
            'header' => 'partners',
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
Route::get('/pmi_tower', function () {
    return view(
        'pages.pmi_property',
        array(
            'header' => 'properties',
        )
    );
});
Route::get('/market_mall', function () {
    return view(
        'pages.market_mall_property',
        array(
            'header' => 'properties',
        )
    );
});
Route::get('/careers', 'EmailController@index');
// Route::get('/careers/send', function() {
//     $name = "Funny Coder";

// // The email sending is done using the to method on the Mail facade
//     Mail::to('plcemailsender@gmail.com’')->send(new TesMail($name));
// })->name('careers/send');
Route::get('/sendmail', 'MailController@index')->name('sendmail'); 

 Route::post('/careers', [EmailController::class, 'send'])->name('careers'); ;
// Route::get('/sendmail/sent','MailController@send')->name('sendmail/sent'); ;

// Route::post('careers/send', 'EmailController@send')->name('careers/send'); 