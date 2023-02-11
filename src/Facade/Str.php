<?php

namespace OmarWebDev\Plass\Facade;

use ArrayAccess;
use OmarWebDev\Plass\Facade\Support\Stringable;

class Str implements ArrayAccess
{
    use Stringable;

    /**
     * Get a character from the string
     * by an index.
     *
     * @param int $index
     * @return string | null
     */
    public function charAt(int $index): string|null
    {
        return $this->offsetGet($index);
    }

    /**
     * Make a string uppercase.
     *
     * @return $this
     */
    public function toUpperCase(): Str
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    /**
     * Make a string lowercase.
     *
     * @return $this
     */
    public function toLowerCase(): Str
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    /**
     * Repeat a string.
     *
     * @param int $count
     * @return string
     */
    public function repeat(int $count): string
    {
        return str_repeat($this->string, $count);
    }

    /**
     * Strip whitespace from the beginning and end of a string.
     *
     * @return $this
     */
    public function trim(): Str
    {
        $this->string = trim($this->string);
        return $this;
    }

    /**
     * Return part of a string
     *
     * @param int $start
     * @param int|null $length
     * @return string
     */
    public function substr(int $start, ?int $length): string
    {
        return substr($this->string, $start, $length);
    }

    /**
     * Replace text within a portion of a string
     *
     * @param array|string $replace
     * @param array|int $offset
     * @param array|int|null $length
     * @return $this
     */
    public function substrReplace(array|string $replace, array|int $offset, array|int|null $length = null): Str
    {
        $this->string = substr_replace($this->string, $replace, $offset, $length);
        return $this;
    }

    /**
     * Shuffle characters in a string
     *
     * @return Str
     */
    public function shuffle(): Str
    {
        $this->string = str_shuffle($this->string);
        return $this;
    }

    /**
     * Replace all occurrences of a string within another string
     *
     * @param array|string $search
     * @param array|string $replace
     * @return $this
     */
    public function replace(array|string $search, array|string $replace): Str
    {
        $this->string = str_replace($search, $replace, $this->string);
        return $this;
    }

    /**
     * Check if a string contains a substring
     *
     * @param string $search
     * @return bool
     */
    public function contains(string $search): bool
    {
        return str_contains($this->string, $search);
    }


}