<?php

use App\Http\Controllers\JobCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('job-categories', [JobCategoryController::class, 'store']);


Route::get('/site-search',[\App\Http\Controllers\SitewideSearchController::class,'search']);