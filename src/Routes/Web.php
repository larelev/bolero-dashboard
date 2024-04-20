<?php

use Bolero\Framework\Routing\Route;

Route::get('/dashboard', [\Bolero\Plugins\Dashboard\Controllers\DashboardController::class, 'index', [
    \Bolero\Plugins\Authentication\Middlewares\Authentication::class,
]]);
