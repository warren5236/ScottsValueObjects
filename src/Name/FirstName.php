<?php

declare(strict_types=1);

namespace ScottsValueObjects\Name;

class FirstName
{
    public function __construct(protected string $value)
    {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function length(): int
    {
        return strlen($this->value);
    }
}
