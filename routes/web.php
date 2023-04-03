<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\InyectionController;

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
Route::get('/dashboard',[ViewsController::class,'dashboard']);
Route::get('/members',[ViewsController::class, 'members']);
Route::get('/books',[ViewsController::class, 'books']);
Route::get('/issued',[ViewsController::class, 'issued']);
Route::get('/returned',[ViewsController::class, 'returned']);
Route::get('/not-returned',[ViewsController::class, 'notReturned']);

// Adding 
Route::post('/new-issued',[InyectionController::class,'addingIssues']);
Route::post('/new-member',[InyectionController::class,'addingMembers']);
Route::post('/new-book',[InyectionController::class,'addingBooks']);

// Deleting

Route::delete('/member/{id}',[InyectionController::class, 'deletingMembers']);
Route::delete('/book/{id}',[InyectionController::class, 'deletingBooks']);