<?php

use App\Models\member;
use App\Models\record;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\memberController;

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
    return view('Home');
});

Route::get('/index', function () {
    $member = member::with(["record"])->get();
    $record = record::with(["member" , "book"])->get()[0];
    dd($member);
    return view('index');
});

Route::get('/', [bookController::class, 'h']);
Route::get('/', [memberController::class, 'member']);


Route::get('/', function () {
    return view('Home');
});
Route::get('/', function () {
    return view('createbook');
});


