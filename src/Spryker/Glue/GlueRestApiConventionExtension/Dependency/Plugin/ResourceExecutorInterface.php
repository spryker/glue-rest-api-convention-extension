<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;

// TODO: will be removed when GlueApplication will be done
interface ResourceExecutorInterface
{
    /**
     * Specificiation:
     * - Transform given resource into a response.
     *
     * @api
     *
     * @param \Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin\RestResourceInterface $resource
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function execute(RestResourceInterface $resource, GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer;
}
