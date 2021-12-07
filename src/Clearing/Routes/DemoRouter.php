<?php
declare(strict_types=1);

namespace CasualMan\Clearing\Routes;

use CasualMan\Clearing\Controller\RpcDemo;
use CasualMan\Common\Internal\AbstractRouters;
use Kernel\Router;

class DemoRouter extends AbstractRouters {
    public static function register(): void
    {
        self::batch(
            Router::any('getTimestamp', [RpcDemo::class, 'Timestamp']),

            Router::any('index', [RpcDemo::class, 'Index'])
        );
    }
}
