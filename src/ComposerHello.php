<?php

namespace Rvoznyi\ComposerHello;

class ComposerHello
{
    public function sayHello(string $name): string
    {
        return sprintf("Hello, %s!", $name);
    }
}
