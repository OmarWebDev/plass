<?php

namespace Plass\Facade;

use Plass\Facade\Support\Stringable;

class Str
{
    use Stringable;

    public function toUpperCase(): self
    {
        $this->string = strtoupper($this->string);
        return $this;
    }
}