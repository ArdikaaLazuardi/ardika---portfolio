<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/projects/{slug?}', [PageController::class, 'projectDetail'])->name('project.detail');
Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');
