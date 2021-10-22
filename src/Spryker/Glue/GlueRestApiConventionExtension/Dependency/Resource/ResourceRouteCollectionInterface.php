<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueRestApiConventionExtension\Dependency\Resource;

interface ResourceRouteCollectionInterface
{
    /**
     * Specification:
     * - map pre flight method (OPTIONS)
     * - should be mapped to a controller action that returns the according CORS headers
     * - @see \Spryker\Glue\GlueRestApiConvention\Router\RestRequestRoutingMatcher will provide a default if not mapped
     *
     * @api
     *
     * @param string $actionName
     * @param array<string, mixed> $context
     *
     * @return self
     */
    public function addOptions(string $actionName, array $context = []): self;

    /**
     * Specification:
     * - map GET method to a controller action
     * - is only called to retrieve a single resource, for collection of resources use addList()
     * - configures if the controller action can be called with valid authentication token only
     * - additional context can be passed that will be passed into the controller action
     *
     * @api
     *
     * @param string $actionName
     * @param bool $isProtected
     * @param array<string, mixed> $context
     *
     * @return self
     */
    public function addGet(string $actionName, bool $isProtected = true, array $context = []): self;

    /**
     * Specification:
     * - map GET method to a controller action
     * - is only called to retrieve a collection of resources, for a single resources use addGet()
     * - configures if the controller action can be called with valid authentication token only
     * - additional context can be passed that will be passed into the controller action
     *
     * @api
     *
     * @param string $actionName
     * @param bool $isProtected
     * @param array<string, mixed> $context
     *
     * @return self
     */
    public function addGetCollection(string $actionName, bool $isProtected = true, array $context = []): self;

    /**
     * Specification:
     * - map POST method to a controller action
     * - configures if the controller action can be called with valid authentication token only
     * - additional context can be passed that will be passed into the controller action
     *
     * @api
     *
     * @param string $actionName
     * @param bool $isProtected
     * @param array<string, mixed> $context
     *
     * @return self
     */
    public function addPost(string $actionName, bool $isProtected = true, array $context = []): self;

    /**
     * Specification:
     * - map DELETE method to a controller action
     * - configures if the controller action can be called with valid authentication token only
     * - additional context can be passed that will be passed into the controller action
     *
     * @api
     *
     * @param string $actionName
     * @param bool $isProtected
     * @param array<string, mixed> $context
     *
     * @return self
     */
    public function addDelete(string $actionName, bool $isProtected = true, array $context = []): self;

    /**
     * Specification:
     * - map PATCH method to a controller action
     * - configures if the controller action can be called with valid authentication token only
     * - additional context can be passed that will be passed into the controller action
     *
     * @api
     *
     * @param string $actionName
     * @param bool $isProtected
     * @param array<string, mixed> $context
     *
     * @return self
     */
    public function addPatch(string $actionName, bool $isProtected = true, array $context = []): self;

    /**
     * Specification:
     * - check if given method is mapped to a controller action
     *
     * @api
     *
     * @param string $method
     *
     * @return bool
     */
    public function has(string $method): bool;

    /**
     * Specification:
     * - get controller, action and context for given method
     *
     * @api
     *
     * @param string $method
     *
     * @return array<string>
     */
    public function get(string $method): array;

    /**
     * Specification:
     * - Retrieve all configured methods
     *
     * @api
     *
     * @return array<string>
     */
    public function getAvailableMethods(): array;
}
