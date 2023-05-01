<?php

declare(strict_types=1);

namespace Tests\Name;

use PHPUnit\Framework\TestCase;
use ScottsValueObjects\Name\LastName;

class LastNameTest extends TestCase
{
    public function testCanInitialize(): void
    {
        $this->assertNotNull(new LastName("Name"));
    }

    public function testLengthReturnsFourForName(): void
    {
        $this->assertEquals(4, (new LastName("Name"))->length());
    }

    public function testIsEmptyReturnsFalseWithString(): void
    {
        $this->assertFalse((new LastName("Name"))->isEmpty());
    }
}
