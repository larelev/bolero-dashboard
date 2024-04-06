<?php

namespace Bolero\Plugins\Dashboard;

use League\Container\DefinitionContainerInterface;

class Dashboard
{
    public static function viewsPaths(): array
    {
        return [
            __DIR__ . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR,
        ];
    }

    public static function routes()
    {
        include __DIR__ . DIRECTORY_SEPARATOR . 'Routes' . DIRECTORY_SEPARATOR . 'Web.php';
    }

    public static function provide(DefinitionContainerInterface $container): DefinitionContainerInterface
    {
        return $container;
    }
}
