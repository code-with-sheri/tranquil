<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/new-note', 'new-note')->name('new-note');
Route::view('/saved-notes', 'saved-notes')->name('saved-notes');
Route::view('/howtouse', 'howtouse')->name('howtouse');
Route::view('/settings', 'settings')->name('settings');
