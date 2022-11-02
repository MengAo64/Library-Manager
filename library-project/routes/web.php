<?php

use App\Http\Controllers\AuthController;
use App\Models\member;
use App\Models\record;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\sweetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

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



// Buat Tampilan Login
// Route::get('/signup', function () {
//     return view('Login.sign-up');
// });

Route::get('/login',[AuthController::class,'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class,'registerStore']);

Route::post('/login', [AuthController::class,'loginStore'])->name("login");

Route::post('/logout', [AuthController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    // buat tampilan Dashboard
Route::get('/home', function () {
    return view('Home');
});
Route::get('/', function () {
    return view('Home');
});
// Route::get('/', function () {
//     return view('Home');
// });

// buat tampilan buku
Route::get('/book',[bookController::class,'index']);
Route::get('/book/create',[bookController::class,'create']);
Route::get('/book/show/{id}',[bookController::class,'show']);
Route::post('/book/store',[bookController::class,'store']);
Route::get('/book/edit/{id}',[bookController::class,'edit']);
Route::post('/book/delete',[bookController::class,'delete']);
Route::resource('book', bookController::class );
Route::get('/coverimg/{path}', function ($path) {
    $path = storage_path('app/coverImg/' . $path);
 
    if (!File::exists($path)) {
        abort(404);
    }
 
    $file = File::get($path);
    $type = File::mimeType($path);
 
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
 
    return $response; ;
});

// buat Tampilan Member
Route::get('/member',[memberController::class,'index']);
Route::get('/member/create',[memberController::class,'create']);
Route::get('/member/show/{id}',[memberController::class,'show']);
Route::post('/member/store',[memberController::class,'store']);
Route::get('/member/edit/{id}',[memberController::class,'edit']);
Route::post('/member/delete',[memberController::class,'delete']);
Route::resource('member', memberController::class );
});
