<?php

use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;


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
    return view('welcome');
});

Route::get('/recordings/{name}/{year?}', function ($name, $year = null) {

    if($year == null)
        $videos = Video::all();
    else
        $videos = Video::whereYear('broadcast_date', $year)->get();

    return view('pages.recordings', compact('name', 'year', 'videos'));
});

Route::resource('/video', VideoController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
