# A simple Matomo API Client for Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/teraone/matomo-client.svg?style=flat-square)](https://packagist.org/packages/teraone/matomo-client)
[![Total Downloads](https://img.shields.io/packagist/dt/teraone/matomo-client.svg?style=flat-square)](https://packagist.org/packages/teraone/matomo-client)
![GitHub Actions](https://github.com/teraone/matomo-client/actions/workflows/main.yml/badge.svg)

This package is based on [VisualAppeal/Matomo-PHP-API](https://github.com/VisualAppeal/Matomo-PHP-API)

## Installation

You can install the package via composer:

```bash
composer require teraone/matomo-client
```

Publish and edit the configuration file

```bash
php artisan vendor:publish
```
 - Choose `matomo-client`
 - Update the file `app/config/matomo-client.php` with your Matomo credentials

## Usage

To keep things simple, only JSON is supported. 

```php

// get the Matomo Client
$matomoClient = app()->get('matomo-client');

// get Visits of this month
$matomo->setDate(now(), MatomoClient::PERIOD_MONTH)
       ->setFilterLimit(10) // defaults to 100
       ->getVisits();



// get Event Names of the last week
$matomo->setDate(now()->subWeek(), MatomoClient::PERIOD_RANGE, now())
        ->getEventName();

```

### Testing

Under the hood this library uses the Laravel HTTP Client. 

You can mock all Requests in your tests 
```php
Http::fake(
  'https://matomo.test/index.php*' => \Http::response(['value' => 123], 200),
);


```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email gotre@teraone.de instead of using the issue tracker.

## Credits

- [VisualAppeal](https://github.com/VisualAppeal)
- [All Contributors](https://github.com/VisualAppeal/Matomo-PHP-API/graphs/contributors)
- This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.



