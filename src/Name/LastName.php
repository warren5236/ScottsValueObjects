<?php

declare(strict_types=1);

namespace ScottsValueObjects\Name;

class LastName
{
    public function __construct(protected string $value)
    {
    }

    public function length(): int
    {
        return strlen($this->value);
    }

    public function isEmpty(): bool
    {
        return strlen($this->value) == 0;
    }
}
