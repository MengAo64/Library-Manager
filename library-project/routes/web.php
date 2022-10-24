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

// Route::get('/index', function () {
//     $member = member::with(["record"])->get();
//     $record = record::with(["member" , "book"])->get()[0];
//     dd($member);
//     return view('index');
// });

Route::get('/', function () {
    return view('Home');
});

Route::get('/home', function () {
    return view('Home');
});


Route::get('/book', [bookController::class, 'h']);
Route::get('/member', [memberController::class, 'member']);
// Route::get('/record', [memberController::class, '']);



Route::get('/addbook', function () {
    return view('createbook');
});

Route::get('/Show', function () {
    return view('Showbook');
});



