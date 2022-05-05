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
    $headerNav = config('headernav');
    $headerProduct = config('headerproduct');
    $mainDcComicsList = config('maindccomicslist');
    $mainDcShopList = config('maindcshoplist');
    $mainDcList = config('maindclist');
    $mainSitesList = config('mainsiteslist');
    return view('guest.home', ["headerNav" => $headerNav,"headerProduct" => $headerProduct,
    "mainDcComicsList" => $mainDcComicsList, "mainDcShopList" => $mainDcShopList,
    "mainDcList" => $mainDcList, "mainSitesList" => $mainSitesList]);
})->name('home');


