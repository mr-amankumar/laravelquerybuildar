<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/users',[StudentController::class,'showStudent']);
Route::get('/showusers',[StudentController::class,'showUser'])->name('home');
Route::get('/newuser/{id}',[StudentController::class,'singleUser'])->name('view.user');
Route::get('/adduser',[StudentController::class,'addUser']);
Route::get('/update',[StudentController::class,'updateUser']);
Route::get('/delete/{id}',[StudentController::class,'deleteUser'])->name('delete.user');