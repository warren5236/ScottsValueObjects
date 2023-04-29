<?php
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
}