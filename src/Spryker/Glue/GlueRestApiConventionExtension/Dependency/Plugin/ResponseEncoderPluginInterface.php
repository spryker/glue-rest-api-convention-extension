<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;

/**
 * Use this plugin to get accpted formats and tranform content to JSON.
 */
interface ResponseEncoderPluginInterface
{
    /**
     * Specification:
     * - Return all formats the encoder can handle.
     *
     * @api
     *
     * @return array<string>
     */
    public function getAcceptedFormats(): array;

    /**
     * Specification:
     * - Check if the given content can be encoded by this implementation.
     *
     * @api
     *
     * @param mixed $content
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return bool
     */
    public function accepts($content, GlueRequestTransfer $glueRequestTransfer): bool;

    /**
     * Specification:
     * - Transform given content into the format these encoder implements.
     *
     * @api
     *
     * @param mixed $content
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return string
     */
    public function encode($content, GlueResponseTransfer $glueResponseTransfer): string;
}
