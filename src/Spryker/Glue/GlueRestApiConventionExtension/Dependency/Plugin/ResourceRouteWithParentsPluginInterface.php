<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin;

interface ResourceRouteWithParentsPluginInterface extends ResourceRoutePluginInterface
{
    /**
     * Specification:
     * - will return all parent resources that need to match
     * - order of the returned parent resources is important
     *
     * @api
     *
     * @return array<string>
     */
    public function getParentResourceTypes(): array;
}
