<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CkEditorController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('ckeditor/upload', [CkEditorController::class, "upload"])->name('ckeditor.upload');
