<?php
namespace Tests\Name;

use ScottsValueObjects\Name\FirstName;
use PHPUnit\Framework\TestCase;

class FirstNameTest extends TestCase
{
    public function testCanInitialize(): void
    {
        $this->assertNotNull(new FirstName("Name"));
    }
}