<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CmsPage\Plugin\Router;

use SprykerShop\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use SprykerShop\Yves\Router\Route\RouteCollection;

class CmsPageRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_PREVIEW = 'cms-preview';
    public const PARAM_PAGE = 'page';

    /**
     * @param \SprykerShop\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \SprykerShop\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addCmsPreviewRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param \SprykerShop\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \SprykerShop\Yves\Router\Route\RouteCollection
     */
    protected function addCmsPreviewRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/cms/preview/{page}', 'CmsPage', 'Preview', 'indexAction');
        $route = $route->assert(static::PARAM_PAGE, '[0-9]+');
        $routeCollection->add(static::ROUTE_PREVIEW, $route);

        return $routeCollection;
    }
}