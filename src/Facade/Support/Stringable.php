<?php

namespace OmarWebDev\Plass\Facade\Support;

trait Stringable
{
    private string $string;

    /**
     * Set a character at offset.
     *
     * @param $offset
     * @param $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->string .= $value;
        } else {
            if ($value === "") {
                $this->offsetUnset($offset);
                return;
            }
            $this->string[$offset] = $value;
        }
    }

    /**
     * Check if a character exists at offset.
     *
     * @param $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->string[$offset]);
    }

    /**
     * Remove character at offset.
     *
     * @param $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        $this->string = substr_replace($this->string, '', $offset, 1);
    }

    /**
     * Get a character at offset.
     *
     * @param $offset
     * @return string|null
     */
    public function offsetGet($offset): string|null
    {
        return $this->string[$offset] ?? null;
    }

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