<?php

declare(strict_types=1);

namespace ScottsValueObjects\Name;

class FirstName
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function length(): int
    {
        return strlen($this->value);
    }
}
