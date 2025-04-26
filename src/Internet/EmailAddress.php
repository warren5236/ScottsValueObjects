<?php

declare(strict_types=1);

namespace ScottsValueObjects\Internet;

use InvalidArgumentException;
use ScottsValueObjects\Basic\NonEmptyString;

class Email extends NonEmptyString
{
    public function __construct(private string $value)
    {
        parent::__construct($value);

        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("{$this->value} is an invalid email address");
        }
    }
}
