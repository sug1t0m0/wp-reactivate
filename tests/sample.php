<?php
// tests/SampleTest.php
namespace Tests;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSame(): void
    {
        $this->assertSame(0111, "0");
    }
}