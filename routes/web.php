<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\linkBuildingController;
use App\Http\Controllers\BloggingController;
use App\Http\Controllers\InboundController;
use App\Http\Controllers\OutreachController;

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


Route::get('/',[HomeController::class,'index']);
//services
Route::get('/seo', [SeoController::class,'index'] );
Route::get('/linkBuilding', [linkBuildingController::class,'index'] );
Route::get('/blogging', [BloggingController::class,'index'] );
Route::get('/inbound', [InboundController::class,'index'] );
Route::get('/outReach', [OutreachController::class,'index'] );

Route::get('/aboutus', [AboutusController::class,'index'] );
Route::get('/contact',[ContactController::class,'index'])->name('contactBlade');;

