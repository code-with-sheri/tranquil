<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/new-note', 'new-note');
Route::view('/saved-notes', 'saved-notes');
Route::view('/how-to-use', 'howtouse');
Route::view('/settings', 'settings');
