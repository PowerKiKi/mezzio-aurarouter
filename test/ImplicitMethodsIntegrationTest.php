<?php
/**
 * @see       https://github.com/zendframework/zend-expressive-aurarouter for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-aurarouter/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace ZendTest\Expressive\Router;

use Zend\Expressive\Router\AuraRouter;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Router\Test\ImplicitMethodsIntegrationTest as RouterIntegrationTest;

class ImplicitMethodsIntegrationTest extends RouterIntegrationTest
{
    public function getRouter() : RouterInterface
    {
        return new AuraRouter();
    }
}
