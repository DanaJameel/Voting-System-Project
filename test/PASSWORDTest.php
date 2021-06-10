<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class PASSWORDTest extends TestCase
{
  

    public function testCanBeUsedAsString(): void
    {
        $this->assertInstanceOf(
            PASSWORD::class,
            PASSWORD::fromString('23')
        );
    }
}