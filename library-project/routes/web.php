<?php

use App\Models\member;
use App\Models\record;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\memberController;
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

// Route::get('/index', function () {
//     $member = member::with(["record"])->get();
//     $record = record::with(["member" , "book"])->get()[0];
//     dd($member);
//     return view('index');
// });

Route::get('/', function () {
    return view('Home');
});

// Route::get('/home', function () {
//     return view('Home');
// });
// Route::get('/book', function () {
//     return view('indexbook');
// });


Route::get('/', [bookController::class, 'h']);

Route::get('/addmember', function () {
    return view('addmember');
});

Route::get('/book', [bookController::class, 'h']);
Route::get('/member', [memberController::class, 'member']);
// Route::get('/record', [memberController::class, '']);



// Route::get('', function () {
//     return view('');
// });
Route::get('/addbook', function () {
    return view('createbook');
});

Route::get('/show', function () {
    return view('Showbook');
});


// Route::get('/addmember', function () {
//     return view('addmember');
// });

// Route::post('/member');

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

Route::post('/book',[bookController::class, "store"] );

Route::resource('{{$buku}}', bookController::class, );
Route::get(memberController::class);

