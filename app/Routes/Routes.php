<?php

// INDEX/HOME
Route::get('', 'HomeController::index');
Route::get('home', 'HomeController::index');

// IMAGES
Route::get('images', 'ImageController::index');
Route::post('images', 'ImageController::store');
Route::get('images/create', 'ImageController::create');
Route::get('images/show/{id}', 'ImageController::show');
Route::get('images/destroy/{id}', 'ImageController::destroy');

// POSTS
Route::get('posts', 'PostController::index');
Route::post('posts', 'PostController::store');
Route::get('posts/create', 'PostController::create');
Route::get('posts/show/{id}', 'PostController::show');
Route::get('posts/destroy/{id}', 'PostController::destroy');

// FALLBACK
Route::fallback('FallbackController::error');

?>