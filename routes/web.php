<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Models\Attachment;
use App\Models\Message;
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

Auth::routes(['register' => false,'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(PortfolioController::class)->group(function(){
    Route::get('/','welcome')->name('welcome');
    Route::get('/about','about')->name('about');
    Route::get('/contacts','contacts')->name('contacts');
});

Route::resource('project', ProjectController::class);

Route::controller(AttachmentController::class)->group(function(){
    Route::get('/project/{project}/attachments/create','create')->name('attachment.create');
    Route::post('/project/{project}/attachments','store')->name('attachment.store');
    Route::get('/project/{project}/attachments/edit','edit')->name('attachment.edit');
    Route::delete('/attachment/{attachment}/destroy','destroy')->name('attachment.destroy');
    Route::get('/attachment/{attachment}/thumb','thumb')->name('attachment.thumb');
});

Route::resource('message', MessageController::class)->except('create');