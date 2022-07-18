<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSuccess(): void
    {
        $example = new Example();
        $result = $example->do();

        self::assertEquals(42, $result);
    }
}
