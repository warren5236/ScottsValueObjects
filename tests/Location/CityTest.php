<?php

declare(strict_types=1);

namespace Tests\Name;

use PHPUnit\Framework\TestCase;
use ScottsValueObjects\Location\City;

class CityTest extends TestCase
{
    public function testBlankStringCausesIsEmptyToReturnTrue(): void
    {
        $item = new City("");
        $this->assertTrue($item->isEmpty());
    }

    public function testAStringCausesIsEmptyToReturnFalse(): void
    {
        $item = new City("Saginaw");
        $this->assertFalse($item->isEmpty());
    }

    // in CityTest.php
    public function testBlankStringCausesIsNotEmptyToReturnFalse(): void
    {
        $item = new City("");
        $this->assertFalse($item->isNotEmpty());
    }
}
