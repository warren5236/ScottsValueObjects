<?php
namespace ScottsValueObjects\Name;

class LastName
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

    public function isEmpty(): bool
    {
        return strlen($this->value) == 0;
    }
}