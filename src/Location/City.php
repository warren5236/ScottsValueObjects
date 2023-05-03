<?php

declare(strict_types=1);

namespace ScottsValueObjects\Location;

class City
{
    public function __construct(private string $value)
    {
    }

    public function isEmpty(): bool
    {
        return strlen($this->value) == 0;
    }

    public function isNotEmpty(): bool
    {
        return strlen($this->value) != 0;
    }
}
