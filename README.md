# axytos Financial Services API SDK

This package provides a _scoped / embedded_ wrapper around the __generated__ OpenAPI client code for [api.axytos.com](https://api.axytos.com/index.html).

## General Information

This package should be compatibile with PHP 5.6 up to the most current version of PHP.

OpenAPI client code is:

1. generated with [openapitools/openapi-generator-cli](https://openapi-generator.tech/) in a recent version
2. scoped with [humbug/php-scoper](https://github.com/humbug/php-scoper)
3. downgraded to PHP 5.6 with [rectorphp/rector](https://github.com/rectorphp/rector)

Polyfills are used from:
* [symfony/polyfill](https://github.com/symfony/polyfill)

## Security

OpenAPI client code is generated with [openapitools/openapi-generator-cli](https://openapi-generator.tech/) and includes 3rd-party dependencies.

For security reasons a recent version of the generator is used where the introduced 3rd-party dependencies have no known security advisories.

3rd-party dependencies in recent versions need to be downgraded to be compatible with PHP 5.6.
This is done automatically with [rectorphp/rector](https://github.com/rectorphp/rector) which only affects language level compatibility. 
Logic level security measures of a dependency should not be affected.

If 3rd-party dependencies depend on language level security features (like `random_bytes`) these features are substitued through the following polyfills:

* [symfony/polyfill](https://github.com/symfony/polyfill)

Security advisories for 3rd-party dependencies can be checked with:

* [./openapi-client/composer.lock](./openapi-client/composer.lock)
* [./polyfills/composer.lock](./polyfills/composer.lock)


## PHP compatibility in detail

In a set theoretic sense the code should be compatible with the intersection langauge of PHP 5.6, ... , PHP 8.1.

This means __we cannot use features of PHP__ which ...

* ... are present in PHP 5.6 but not in newer versions of PHP
* ... are present in newer versions of PHP but not in PHP 5.6

Downgrad to PHP 5.6 is conducted automatically with [rectorphp/rector](https://github.com/rectorphp/rector).

However, some incompatibilities remain and need to be addressed differently.

### Addressed Incompatibilities

#### (1) `hrtime`

see: https://www.php.net/manual/de/function.hrtime.php

`hrtime` wird verwendet in:

* `guzzlehttp/guzzle/src/Utils.php`

`hrtime` is only used if it is present in the used version of PHP.
No adjustments are necessary.

#### (2) `throw` inside `__toString`

see: https://www.php.net/manual/en/language.oop5.magic.php#object.tostring

`throw` inside `__toString` is used in:

* `guzzlehttp/psr7/src/PumpStream.php`
* `guzzlehttp/psr7/src/AppendStream.php`
* `guzzlehttp/psr7/src/StreamDecoratorTrait.php`
* `guzzlehttp/psr7/src/Stream.php`
* `guzzlehttp/psr7/src/FnStream.php`

Exceptions are thrown depending on the used version of PHP.
No adjustments are necessary.

#### (3) `Error` and `TypeError`

see: https://www.php.net/manual/de/class.error.php

`Error` and `TypeError` is used in:
* `guzzlehttp/psr7/src/Header.php`
* `guzzlehttp/guzzle/src/Utils.php`
* `guzzlehttp/guzzle/src/Handler/MockHandler.php`

[symfony/polyfill](https://github.com/symfony/polyfill) is used as polyfill.

#### (4) `random_bytes`

see: https://www.php.net/manual/en/function.random-bytes.php

`random_bytes` is used in:

* `guzzlehttp/psr7/src/MultipartStream.php`

[symfony/polyfill](https://github.com/symfony/polyfill) is used as polyfill. 