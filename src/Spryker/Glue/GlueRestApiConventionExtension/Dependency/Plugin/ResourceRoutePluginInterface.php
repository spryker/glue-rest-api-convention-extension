<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin;

use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface as GlueResourceRoutePluginInterface;

interface ResourceRoutePluginInterface extends GlueResourceRoutePluginInterface
{
    /**
     * @api
     *
     * Specification:
     *  - This method should return FQCN to the controller
     *
     * @return string
     */
    public function getController(): string;
}
