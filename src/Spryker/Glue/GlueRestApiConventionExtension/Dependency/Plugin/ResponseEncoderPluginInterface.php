<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin;

interface ResponseEncoderPluginInterface
{
    /**
     * Specification:
     * - Return all formats the encoder can handle
     *
     * @api
     *
     * @return array<string>
     */
    public function getAcceptedFormats(): array;

    /**
     * Specification:
     * - Check if the given content can be encoded by this implementation
     *
     * @api
     *
     * @param mixed $content
     *
     * @return bool
     */
    public function accepts($content): bool;

    /**
     * Specification:
     * - Transform given content into the format these encoder implements
     *
     * @api
     *
     * @param mixed $content
     *
     * @return string
     */
    public function encode($content): string;
}
