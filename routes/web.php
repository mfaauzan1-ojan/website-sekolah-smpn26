<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;
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
    return view('welcome', [
        "title"=> "Website"
    ]);
});

Route::get('/tentangkami', function () {
    return view('tentangkami', [
        "title"=> "Tentangkami"
    ]);
});

Route::get('/pengumuman', function () {
    return view('pengumuman', [
        "title"=> "Pengumuman"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title"=> "Berita"
    ]);
});

Route::get('/info', function () {
    return view('info', [
        "title"=> "Info"
    ]);
});

// Route::get('/dataguru', function () {
//     return view('dataguru', [
//         "title"=> "dataguru"
//     ]);
// });

Route::get('/index',[PostController::class,'index'], function () {
    return view('index',[
        "title"=> "Index"
    ]);
})->middleware('auth');

Route::get('/dataguru',[PostController::class,'dataguru'], function () {
    return view('dataguru',[
        "title"=> "Dataguru"
    ]);
})->middleware('auth');

Route::get('/tentangkami',[PostController::class,'tentangkami'], function () {
    return view('tentangkami',[
        "title"=> "Tentangkami"
    ]);
});

Route::get('/pengumuman',[NewsController::class,'pengumuman'], function () {
    return view('pengumuman',[
        "title"=> "Pengumuman"
    ]);
});

Route::get('/pengumuman', [NewsController::class, 'pengumuman'])->name('pengumuman');

Route::get('/create',function(){
return view('create');
})->middleware('auth');

Route::post('/post',[PostController::class,'store']);
Route::delete('/delete/{id}',[PostController::class,'destroy']);
Route::get('/edit/{id}',[PostController::class,'edit'])->middleware('auth');

Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);

Route::put('/update/{id}',[PostController::class,'update']);

route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi')->middleware('guest');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/login',[LoginController::class,'halamanlogin'])->name('login')->middleware('guest');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    route::get('/beranda','HomeController@index');    
});

Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {
    route::post('/simpan-masuk',[PresensiController::class,'store'])->name('simpan-masuk');
    route::get('/presensi-masuk',[PresensiController::class,'index'])->name('presensi-masuk');    
    route::get('/presensi-keluar',[PresensiController::class,'keluar'])->name('presensi-keluar');   
    Route::post('ubah-presensi',[PresensiController::class,'presensipulang'])->name('ubah-presensi');
    Route::get('filter-data',[PresensiController::class,'halamanrekap'])->name('filter-data'); 
    Route::get('filter-data/{tglawal}/{tglakhir}',[PresensiController::class,'tampildatakeseluruhan'])->name('filter-data-keseluruhan'); 
});

Route::get('/berita', [NewsController::class, 'index'])->name('berita');

Route::get('/tambahberita', [NewsController::class, 'tambahberita'])->name('tambahberita');
Route::post('/insertdata', [NewsController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [NewsController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [NewsController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [NewsController::class, 'delete'])->name('delete');