<?php

declare(strict_types=1);

namespace Tests\Name;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;
use ScottsValueObjects\Location\City;

#[CoversClass(City::class)]
#[UsesClass(City::class)]
final class CityTest extends TestCase
{
    public function testBlankStringCausesIsEmptyToReturnTrue(): void
    {
        $city = new City("");
        $this->assertTrue($city->isEmpty());
    }

    public function testAStringCausesIsEmptyToReturnFalse(): void
    {
        $city = new City("Saginaw");
        $this->assertFalse($city->isEmpty());
    }

    // in CityTest.php
    public function testBlankStringCausesIsNotEmptyToReturnFalse(): void
    {
        $city = new City("");
        $this->assertFalse($city->isNotEmpty());
    }
}
