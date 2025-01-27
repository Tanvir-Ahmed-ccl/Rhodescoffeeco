<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\SubscribersController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontPageController::class, 'welcome']);
Route::get('/our-story', [FrontPageController::class, 'ourStory']);
Route::get('faqs', [FrontPageController::class, 'faqs']);
Route::get('contact', [FrontPageController::class, 'contact']);
Route::post('contact', [ContactController::class, 'store']);
Route::post('/subscribe', [SubscribersController::class, 'store']);
Route::get('/blogs', [FrontPageController::class, 'blogs']);
Route::get('/quote-submitted', [FrontPageController::class, 'quoteSubmitted']);
Route::get('/menu', [FrontPageController::class, 'menu']);
Route::get('/gallery', [FrontPageController::class, 'gallery']);
