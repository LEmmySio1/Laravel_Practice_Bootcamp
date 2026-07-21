<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

# Home page file directory: resources/views/home.blade.php
Route::match(['get', 'post'], '/', function (Request $request) {

    $message = null;

    /*if ($request->isMethod('post')) {
        if ($request->sound == 'bird') {
            $message = 'chirp';
        } else {
            $message = 'That is not the sound of a bird';
        }
    }*/

    return view('home', compact('message'));
});
?>
