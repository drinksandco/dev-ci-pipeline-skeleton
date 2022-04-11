<?php
// tests/AppTest.php
namespace TestDevCi\Test;

use TestDevCi\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testItReturnANumericString(): void
    {
        $app = new App();

        $this->assertSame('23', $app->doSomething());
    }
}
