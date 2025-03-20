<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('movies.website'); // Nếu không có biến nào cần truyền
});

