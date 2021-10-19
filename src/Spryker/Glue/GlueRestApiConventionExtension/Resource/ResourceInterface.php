<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Resource;

use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface;
use Spryker\Glue\GlueApplicationExtension\Dependency\Resource\ResourceInterface as GlueApplicationResourceInterface;

interface ResourceInterface extends GlueApplicationResourceInterface
{
    /**
     * @return ResourceRouteCollectionInterface|null
     */
    public function getMatchingResourceCollection(): ?ResourceRouteCollectionInterface;
}
