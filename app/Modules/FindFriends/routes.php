<?php


Route::get('/', 'App\Modules\FindFriends\Controllers\ViewController@welcome')->name('view');
Route::get('search-friends/{user_id}', 'App\Modules\FindFriends\Controllers\ViewController@searchFriends')->name('searchFriends');
