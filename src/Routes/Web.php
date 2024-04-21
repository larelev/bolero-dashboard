<?php

use Bolero\Framework\Routing\Route;
use Bolero\Plugins\Authentication\Middlewares\Authentication;
use Bolero\Plugins\Dashboard\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index', [
    Authentication::class,
]]);
