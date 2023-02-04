<?php

namespace Plass\Facade\Support;

trait Stringable
{
    private string $string;

    /**
     * Initialize a new stringable class
     *
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Initialize a new stringable class
     *
     * @param string $string
     */
    public static function of(string $string): self
    {
        return new self($string);
    }

    public function __toString(): string
    {
        return $this->string;
    }

    public function toString(): string
    {
        return $this->string;
    }
}