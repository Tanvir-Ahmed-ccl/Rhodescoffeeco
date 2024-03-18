<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontPageController::class, 'welcome']);
Route::get('/our-story', [FrontPageController::class, 'ourStory']);
Route::get('faqs', [FrontPageController::class, 'faqs']);
Route::get('contact', [FrontPageController::class, 'contact']);
Route::post('contact', [ContactController::class, 'store']);
