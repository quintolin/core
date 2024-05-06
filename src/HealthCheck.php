<?php

declare(strict_types=1);

namespace Quintolin\Core;

final readonly class HealthCheck
{
    public function __construct(private StorageHealthCheckInterface $storageHealthCheck) {}

    public function __invoke(): array
    {
        return [
            'core' => true,
            'storage' => ($this->storageHealthCheck)(),
        ];
    }
}
