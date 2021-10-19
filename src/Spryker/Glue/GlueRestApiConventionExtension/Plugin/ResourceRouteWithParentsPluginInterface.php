<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Plugin;

interface ResourceRouteWithParentsPluginInterface extends ResourceRoutePluginInterface
{
    /**
     * @return array<string>
     */
    public function getParentResourceTypes(): array;
}
