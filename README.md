# Plass
Introducing Plass, the ultimate solution for converting PHP's built-in functions into class methods! With Plass, you can access PHP's functions in a more intuitive and readable way.

For example, the `strtoupper` function can now be called as `Str::of('some string')->toUpperCase()`. This not only makes your code more readable, but it also makes it easier to understand what each method does, without having to refer to the PHP manual.

Plass ~~covers all~~ wil cover all the common PHP functions, including string manipulation, array operations, and more. With its concise and consistent API, you can use familiar method names to perform the same operations as in PHP.

In addition, Plass includes a comprehensive test suite to ensure compatibility with the latest version of PHP and to ensure that your code will continue to work as expected.

Whether you're a beginner or an experienced developer, Plass will make your life easier by providing a better, more intuitive way to access PHP's functions. Try it today and see the difference for yourself!

## Why use Plass?
- Improved Readability: By converting PHP functions into class methods, Plass makes your code more readable and understandable. Instead of using cryptic function names, you can now use intuitive and descriptive method names, making it easier to follow your code's logic.

- Consistent API: Plass provides a consistent API for all functions, making it easier to remember how to perform each operation. No more having to flip back and forth between the PHP manual to figure out how to use a function.

- Better Code Organization: By encapsulating functions into classes, Plass allows you to organize your code into meaningful groups. This makes it easier to find and reuse code, and also helps to prevent naming collisions.

- Improved Syntax: Plass uses a fluent syntax, allowing you to chain methods together to perform complex operations. This makes your code more concise and less verbose, leading to fewer bugs and easier maintenance.

- Comprehensive Test Suite: Plass includes a comprehensive test suite, ensuring compatibility with the latest version of PHP and ensuring that your code will continue to work as expected.

Whether you're a beginner or an experienced developer, Plass will make your life easier by providing a better, more intuitive way to access PHP's functions. So why not try it today and see the difference for yourself?


## Usage for strings:

### Create a string
PHP normal way of creating a string is simple for example:
```php
$str = "Some String";

echo $str; // prints "Some String"
```
Well, when using Plass it is a little different because you have to create a new instance of Str class for example:

```php
use OmarWebDev\Plass\Facade\Str;

$str = new Str('Some String');

echo $str; // prints "Some String"
```

You can also use static method called of instead of using new keyword for example:

```php
use OmarWebDev\Plass\Facade\Str;

$str = Str::of('Some String'); // same as new Str('Some String')

echo $str; // prints "Some String"
```

### Method chaining
Yes, Plass supports method chaining for example:
```php

use OmarWebDev\Plass\Facade\Str;

$str = Str::of('Some String')
            ->toUpperCase();
echo $str; // prints "SOME STRING"
```

### Accessing the value of the string
In Plass it is possible to access the string without calling any methods using php type casting for example:
```php
use OmarWebDev\Plass\Facade\Str;

$str = Str::of('Some String');

$str = (string) $str; // returns "Some String"
```
However, if you don't want to use php string type cast you can use toString method for example:
```php
use OmarWebDev\Plass\Facade\Str;

$str = Str::of('Some String');

$str = $str->toString(); // same as (string) $str
```

### Accessing character at specific index
While plass is using class it is still possible to access character by index for exmaple:

```php
use OmarWebDev\Plass\Facade\Str;

$str = Str::of('Some String');

$char = $str->charAt(0); // returns "S"
$char = $str[0]; // returns "S"
```

### Changing string
You can easily change the string by just creating a new instance, but what if you want to keep the old string and just edit a character?
Plass provides a way to change a character in a string without creating a new instance for example:
```php
use OmarWebDev\Plass\Facade\Str;

$str = Str::of('Example');

$str[0] = 'R'; // changes letter "E" to "R"
$str[] = ', Hello'; // adds ", Hello" to the string
unset($str[0]); // removes the first letter in the string
$str[0] = ''; // removes the first letter in the string
echo $str; // prints "ample, Hello"
```

### Available Methods
Only methods that returns `Str` is chainable
- `charAt(int $index): string|null` returns the character in a specific index
- `toUpperCase(): Str` converts a string to upper case
- `toLowerCase(): Str` converts a string to lower case
- `repeat(int $count): string` repeats string a number of times
- `trim(): Str` Strip whitespace from the beginning and end of a string
- `substr(int $start, ?int $length): string` returns a part from the string
- `substrReplace(array|string $replace, array|int $offset, array|int|null $length = null): Str` replace a part of the string by offset
- `shuffle(): Str` Shuffles the string
- `replace(array|string $search, array|string $replace): Str` replace a substring from the string
- `contains(string $search): bool` check if the string contains substring

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)