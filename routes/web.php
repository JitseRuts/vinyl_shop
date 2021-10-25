<?php

use App\Genre;
use App\Record;
use App\User;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/contact-us', function () {
    return view('contact');
});*/

Route::view('/', 'home');
Route::view('contact-us', 'contact');
/*Route::get('admin/records', function (){
    $records = [
        'Queen - Greatest Hits',
        'The Rolling Stones - Sticky Fingers',
        'The Beatles - Abbey Road'
    ];

    return view('admin.records.index', [
        'records' => $records
    ]);
});*/

// New version with groups
Route::prefix('admin')->group(function () {
    Route::redirect('/', '/admin/records');
    Route::get('records', 'Admin\RecordController@index');
});

// Ter Illustratie
Route::prefix('api')->group(function () {
    Route::get('users', function () {
        return User::get();
    });
    Route::get('records', function () {
        return Record::with('genre')->get();
    });
    Route::get('genres', function () {
        return Genre::with('records')->get();
    });
});

Route::get('shop', 'ShopController@index');
Route::get('shop/{id}', 'ShopController@show');



