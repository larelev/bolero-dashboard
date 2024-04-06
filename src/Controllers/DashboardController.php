<?php

namespace Bolero\Plugins\Dashboard\Controllers;

use Bolero\Framework\Http\Response;
use Bolero\Framework\MVC\AbstractController;

class DashboardController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('dashboard.html.twig');
    }
}
