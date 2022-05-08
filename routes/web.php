<?php

// use App\Repositories\UserRepository;
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
    return view('welcome');
});
// Route::get('/test', function (UserRepository $userRepository) {
//     dd($userRepository->findById(1));
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Routes
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('users',UserController::class);
    Route::controller(UserController::class)->group(function () {
        Route::get('profile', 'show');
    });
});
