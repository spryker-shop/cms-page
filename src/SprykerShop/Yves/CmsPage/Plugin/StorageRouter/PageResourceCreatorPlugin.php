<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CmsPage\Plugin\StorageRouter;

use Spryker\Shared\CmsStorage\CmsStorageConstants;
use Spryker\Yves\Kernel\AbstractPlugin;
use SprykerShop\Yves\StorageRouterExtension\Dependency\Plugin\ResourceCreatorPluginInterface;

/**
 * @method \SprykerShop\Yves\CmsPage\CmsPageFactory getFactory()
 */
class PageResourceCreatorPlugin extends AbstractPlugin implements ResourceCreatorPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getType(): string
    {
        return CmsStorageConstants::CMS_PAGE_RESOURCE_NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getModuleName(): string
    {
        return 'CmsPage';
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getControllerName(): string
    {
        return 'Cms';
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getActionName(): string
    {
        return 'page';
    }

    /**
     * {@inheritDoc}
     *
     * @param array<string, mixed> $data
     *
     * @return array<string, mixed>
     */
    public function mergeResourceData(array $data): array
    {
        return [
            'data' => $data,
        ];
    }
}
