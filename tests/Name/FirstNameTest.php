<?php

declare(strict_types=1);

namespace Tests\Name;

use PHPUnit\Framework\TestCase;
use ScottsValueObjects\Name\FirstName;

class FirstNameTest extends TestCase
{
    public function testCanInitialize(): void
    {
        $this->assertNotNull(new FirstName("Name"));
    }
}
