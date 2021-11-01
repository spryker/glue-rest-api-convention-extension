<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueVersionTransfer;

interface VersionedResourceRoutePluginInterface extends ResourceRoutePluginInterface
{
    /**
     * Specification:
     * - Return on which exact version this route matches.
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\GlueVersionTransfer
     */
    public function getMatchingVersion(): GlueVersionTransfer;
}
