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

Route::get('/comic/{id}', function ($id) {
    $headerNav = config('headernav');
    $mainDcComicsList = config('maindccomicslist');
    $mainDcShopList = config('maindcshoplist');
    $mainDcList = config('maindclist');
    $mainSitesList = config('mainsiteslist');
    $headerProduct = config('headerproduct');
    if(is_numeric($id) && $id >= 0 && $id < count($headerProduct)){
        return view('guest.comic', ["headerNav" => $headerNav,"headerProduct" => $headerProduct[$id],
        "mainDcComicsList" => $mainDcComicsList, "mainDcShopList" => $mainDcShopList,
        "mainDcList" => $mainDcList, "mainSitesList" => $mainSitesList]);      
    }else abort(404);    
})->name('comic');



