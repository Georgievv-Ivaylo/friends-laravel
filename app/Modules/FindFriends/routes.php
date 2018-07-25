<?php


Route::get('/', 'App\Modules\FindFriends\Controllers\ViewController@welcome')->name('view');
Route::get('/{user_id}', 'App\Modules\FindFriends\Controllers\ViewController@welcome')->name('view');
