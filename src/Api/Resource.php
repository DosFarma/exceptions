<?php
declare(strict_types=1);

namespace DosFarma\Exceptions\Api;

interface Resource
{
    public function resourceName(): string;

    public function resourceCode(): int;
}
