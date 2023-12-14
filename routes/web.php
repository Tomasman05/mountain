<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MountainController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/form",[MountainController::class,"getForm"]);
Route::post("submit",[MountainController::class,"submitMountain"]);