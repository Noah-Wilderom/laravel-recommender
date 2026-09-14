<div align="center">
    <h1>Laravel Recommender</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/noah-wilderom/laravel-recommender"><img src="https://img.shields.io/packagist/v/noah-wilderom/laravel-recommender.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/noah-wilderom/laravel-recommender"><img src="https://img.shields.io/packagist/php-v/noah-wilderom/laravel-recommender.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/noah-wilderom/laravel-recommender"><img src="https://badge.laravel.cloud/badge/noah-wilderom/laravel-recommender?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/noah-wilderom/laravel-recommender/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/noah-wilderom/laravel-recommender/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/noah-wilderom/laravel-recommender"><img src="https://img.shields.io/packagist/dt/noah-wilderom/laravel-recommender.svg?style=flat-square" alt="Total Downloads"></a>
</p>

Business Recommender calculation system

## Installation

You can install the package via Composer:

```bash
composer require noah-wilderom/laravel-recommender
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="laravel-recommender"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="laravel-recommender-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="laravel-recommender-migrations"
php artisan migrate
```

## Usage

<!-- Add a basic usage example here. -->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to Laravel Recommender! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Wilderom](https://github.com/noah-wilderom)
- [All Contributors](../../contributors)

## License

Laravel Recommender is open-sourced software licensed under the [MIT license](LICENSE.md).
