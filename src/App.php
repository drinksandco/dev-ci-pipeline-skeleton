<?php

declare(strict_types=1);

namespace TestDevCi;

class App
{
    public function __construct(
        private readonly string $foo = ''
    ) {
    }

    public function doSomething(): string
    {
        $foo = $this->foo === '' ? (string)23 : $this->foo;

        return $foo;
    }
}
