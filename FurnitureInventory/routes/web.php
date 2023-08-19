<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources(
    [
        'products' => ProductController::class,
    ],
    // [
    //     'middleware' => 'auth'
    //     ]
);
Route::resources(
    [
        'categories' => CategoryController::class,
    ],
 
);
Route::resources(
    [
        'tags' =>TagController::class,
    ],
 
);

Route::get('login', [AuthenticateController::class, 'loginIndex'])->name('login');

Route::post('login', [AuthenticateController::class, 'login']);

Route::get('register', [AuthenticateController::class, 'registerIndex'])->name('register');

Route::post('register', [AuthenticateController::class, 'register']);

Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');