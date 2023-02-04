<?php

use Plass\Facade\Str;

it('should return a string when cast to print it', function () {
    $str = new Str('Hello World');

    expect((string)Str::of('Hello World'))->toBe('Hello World')
        ->and((string)$str)->toBe('Hello World')
        ->and($str->toString())->toBe('Hello World');
});

it('should return upper/lower case string after upper/lower casing it', function () {
    $str = Str::of('hello');
    $str->toUpperCase();

    expect($str->toString())->toBe('HELLO');

    $str->toLowerCase();
    expect($str->toString())->toBe('hello');
});

it('should return char at specific index', function () {
   $str = Str::of('hello');

   expect($str->charAt(0))->toBe('h');
});

it('should repeat string', function () {
    $str = Str::of('_hello');

    expect($str->repeat(1))->toBe('_hello')
        ->and($str->repeat(2))->toBe('_hello_hello');
});

it('should trim string', function () {
    $str = Str::of("   hello   ");
    $str->trim();
    expect($str->toString())->toBe('hello');
});