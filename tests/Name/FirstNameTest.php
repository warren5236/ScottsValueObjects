<?php

declare(strict_types=1);

namespace Tests\Name;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;
use ScottsValueObjects\Name\FirstName;

#[CoversClass(FirstName::class)]
#[UsesClass(FirstName::class)]
final class FirstNameTest extends TestCase
{
    public function testCanInitialize(): void
    {
        $this->assertEquals("Name", (new FirstName("Name"))->getValue());
    }

    public function testLengthReturnsFourForName(): void
    {
        $this->assertEquals(4, (new FirstName("Name"))->length());
    }
}
