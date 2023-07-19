<?php
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CommentController;
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

Route::get('/',[FrontendController::class,'welcome']);


Route::post('/create',[CommentController::class,'addComment']);


Route::get('/delete/{id}',[CommentController::class,'delete']);

Route::get('/edit/{id}',[CommentController::class,'edit']);

Route::post('/edit-comment/{id}',[CommentController::class,'update']);