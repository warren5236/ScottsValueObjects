<?php

namespace Tests\Name;

use ScottsValueObjects\Name\LastName;
use PHPUnit\Framework\TestCase;

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