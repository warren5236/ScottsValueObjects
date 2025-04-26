<?php

declare(strict_types=1);

namespace ScottsValueObjects\Basic;

class NonEmptyString
{
    public function __construct(private string $value)
    {
        if (mb_strlen($this->value) == 0) {
            throw new \Exception("Value cannot be empty");
        }
    }

    public function isEmpty(): bool
    {
        return false;
    }

    public function isNotEmpty(): bool
    {
        return true;
    }
}
