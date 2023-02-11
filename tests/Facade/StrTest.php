<?php

use OmarWebDev\Plass\Facade\Str;

it('should return a string when cast to print it', function () {
    $str = new Str('Hello World');

    expect((string)Str::of('Hello World'))
        ->toBe((string)$str)
        ->toBe($str->toString())
        ->toBe('Hello World');
});

it('should work with is equal operator', function () {
    $str = new Str('Hello World');

    expect($str == 'Hello World')->toBeTrue();
});

it('should return upper/lower case string after upper/lower casing it', function () {
    $str = Str::of('hello');
    $str->toUpperCase();

    expect($str->toString())->toBe('HELLO');

    $str->toLowerCase();
    expect($str->toString())->toBe('hello');
});

it('should return char at specific index or null if not found', function () {
   $str = Str::of('hello');

   expect($str->charAt(0))
       ->toBe($str[0])
       ->toBe('h')
       ->and($str[10])->toBe(null);
});

it('should be able to check if offset exists or not', function () {
    $str = Str::of('hello');

    expect($str->offsetExists(0))
        ->toBe($str->offsetExists(1))
        ->toBe($str->offsetExists(2))
        ->toBeTrue()
        ->and($str->offsetExists(9))->toBeFalse();
});


it('should be able to use unset/set offset', function () {
    $str = Str::of('hello');

    unset($str[0]);
    expect((string) $str)->toBe('ello');
    $str[0] = "h";
    expect((string) $str)->toBe('hllo');
    $str[0] = "";
    expect((string) $str)->toBe('llo');
    $str[] = ". Hello";
    expect((string) $str)->toBe('llo. Hello');

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

it('should return a part of string', function () {
    $str = Str::of('hello world');

    expect($str->substr(0, 3))->toBe('hel')
        ->and($str->substr(3, 5))->toBe('lo wo');
});

it('should replace a part of string', function () {
    $str = Str::of('hello world');

    expect((string) $str->substrReplace('bye', 0, 5))->toBe('bye world')
        ->and((string) $str->substrReplace('hello', 0, 3))->toBe('hello world');
});

it('should shuffle a string', function () {
    $str = Str::of('hello world');

    expect($str->shuffle() == 'hello world')
        ->toBeFalse();
});

it('should replace words in a string', function () {
    $str = Str::of('hello, world');

    expect($str->replace('hello', 'world') == 'world, world')
        ->toBeTrue();
});

it('should check if string contains a substring', function () {
   $str = Str::of('hello world');
   expect($str->contains('hello'))
       ->toBe($str->contains('world'))
       ->toBeTrue();
});