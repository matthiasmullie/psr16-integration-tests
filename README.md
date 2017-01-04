# psr/simple-cache implementation test case

[![Build status](https://api.travis-ci.org/matthiasmullie/psr16-integration-tests.svg?branch=master)](https://travis-ci.org/matthiasmullie/psr16-integration-tests)
[![Latest version](http://img.shields.io/packagist/v/matthiasmullie/psr16-integration-tests.svg)](https://packagist.org/packages/matthiasmullie/psr16-integration-tests)
[![Downloads total](http://img.shields.io/packagist/dt/matthiasmullie/psr16-integration-tests.svg)](https://packagist.org/packages/matthiasmullie/psr16-integration-tests)
[![License](http://img.shields.io/packagist/l/matthiasmullie/psr16-integration-tests.svg)](https://github.com/matthiasmullie/psr16-integration-tests/blob/master/LICENSE)


This package contains a test case to verify the correct implementation of the
[PSR-16 psr/simple-cache interface](http://www.php-fig.org/psr/psr-16/).


## Example usage

Just extend from `MatthiasMullie\Psr16\SimpleCacheTestCase` and implement
`createSimpleCache`:

```php
class IntegrationTest extends MatthiasMullie\Psr16\SimpleCacheTestCase
{
    public function createSimpleCache()
    {
        // return your Psr\SimpleCache\CacheInterface implementation here
        return new SimpleCache();
    }
}
```


## Installation

Simply add a dependency on matthiasmullie/psr16-integration-tests to your
composer.json file:

```sh
composer require matthiasmullie/psr16-integration-tests --dev
```


## License

matthiasmullie/psr16-integration-tests is [MIT](http://opensource.org/licenses/MIT) licensed.
