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
    $data = [
        'comics' => config('db.comics'),
        'navs' => config('db.navs'),
        'options' => config('db.options'),
        'dcComics' => config('footer-links.dcComics'),
        'shop' => config('footer-links.shop'),
        'dc' => config('footer-links.dc'),
        'sites' => config('footer-links.sites'),
        'socials' => config('footer-links.socials',
        )

    ];

    //dd(config('db.products'));
    return view('welcome', $data);
})->name('welcome');