<?php

use Illuminate\Support\Facades\Route;

Route::prefix(config('rambo.prefix'))->middleware(['web'])->group(function () {

});
