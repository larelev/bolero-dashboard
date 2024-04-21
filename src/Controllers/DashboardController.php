<?php

namespace Bolero\Plugins\Dashboard\Controllers;

use Bolero\Framework\Http\Response;
use Bolero\Framework\MVC\AbstractController;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class DashboardController extends AbstractController
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index(): Response
    {
        return $this->render('dashboard.html.twig');
    }
}
