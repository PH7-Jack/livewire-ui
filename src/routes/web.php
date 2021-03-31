<?php

use Illuminate\Support\Facades\Route;
use WireUi\Controllers\IconsController;

Route::get('/wireui/icons/{style}/{icon}', [IconsController::class, 'getIcon'])
    ->where('style', '(outline|solid)')
    ->name('wireui.icons');