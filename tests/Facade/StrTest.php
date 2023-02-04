<?php

use Plass\Facade\Str;

it('Should return a string when cast to print it', function () {
    $str = new Str('Hello World');

    expect((string)Str::of('Hello World'))->toBe('Hello World')
        ->and((string)$str)->toBe('Hello World')
        ->and($str->toString())->toBe('Hello World');
});

it('Should return upper case string after upper casing it', function () {
    $str = Str::of('hello');
    $str->toUpperCase();

    expect($str->toString())->toBe('HELLO');
});