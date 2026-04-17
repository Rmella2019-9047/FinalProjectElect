<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('recipes');
});

Route::post('/recipes', function (Request $request) {
    return response()->json([
        'title' => $request->title,
        'ingredients' => $request->ingredients
    ]);
});
