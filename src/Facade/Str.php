<?php

namespace Plass\Facade;

use ArrayAccess;
use Plass\Facade\Support\Stringable;

class Str
{
    use Stringable;

    public function charAt(int $index)
    {
        return $this->string[$index];
    }
    
    
    public function toUpperCase(): self
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function toLowerCase(): self
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function repeat(int $count): string {
        return str_repeat($this->string, $count);
    }

    public function trim(): self
    {
        $this->string = trim($this->string);
        return $this;
    }
}