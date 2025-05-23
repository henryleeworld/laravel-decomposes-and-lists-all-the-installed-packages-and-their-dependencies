<?php

use Illuminate\Support\Facades\Route;
use Lubusin\Decomposer\Controllers\DecomposerController;

Route::get('decompose', [DecomposerController::class, 'index']);
