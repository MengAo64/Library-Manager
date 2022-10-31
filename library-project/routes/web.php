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


Route::get('/', [bookController::class, 'index']);

Route::get('/addmember', function () {
    return view('addmember');
});
Route::get('/member', function () {
    return view('member');
});

// Route::get('/book', [bookController::class, 'h']);
// Route::get('/member', [memberController::class, 'member']);
//Route get => member => indexmember
//Route get => member => create
//Route post => member => addmember
//Route get => member/{id} => show
//Route put => member/{id} => update
//Route delete => member/{id} => delete
//Route get => member/{id}/edit +> edit

// Route::get('/record', [memberController::class, 'index']);
// Route::get('/record/show_api', [memberController::class, 'show api']);





Route::get('/addbook', function () {
    return view('createbook');
});
Route::get('/cmember', function () {
    return view('createmember');
});

// Route::get('/show', function () {
//     return view('Showbook');
// });
// Route::get('/show/{id}', [bookController::class , "show"]);


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

// Route::post('/book',[bookController::class, "store"] );
// Route::post('/member',[memberController::class, "store"] );

Route::resource('book', bookController::class );
Route::resource('member', memberController::class );
Route::get('/member/{id}/edit',[memberController::class,'edit']);
Route::put('/member/{id}',[memberController::class,'update']);
Route::delete('/member/{id}',[memberController::class,'destroy']);
// Route::get(memberController::class);

// Route::get('/book/{id}', [UserController::class, 'show']);