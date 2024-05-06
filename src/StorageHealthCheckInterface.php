<?php

declare(strict_types=1);

namespace Quintolin\Core;

interface StorageHealthCheckInterface
{
    public function __invoke(): mixed;
}
