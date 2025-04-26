<?php

declare(strict_types=1);

namespace Tests\Internet;

use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;
use ScottsValueObjects\Internet\Email;

#[CoversClass(Email::class)]
#[UsesClass(Email::class)]
final class EmailTest extends TestCase
{
    public function testValidEmailCanBeInitialized(): void
    {
        $email = new Email("scott@test.com");
        $this->assertFalse($email->isEmpty());
    }

    public function testInvalidEmailCanNotBeInitialized(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Email("scotttest.com");
    }
}
