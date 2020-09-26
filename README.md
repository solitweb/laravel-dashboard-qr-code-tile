# A QR code tile for Laravel Dashboard

[![Latest Version on Packagist](https://img.shields.io/packagist/v/solitweb/laravel-dashboard-qr-code-tile.svg?style=flat-square)](https://packagist.org/packages/solitweb/laravel-dashboard-qr-code-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/solitweb/laravel-dashboard-qr-code-tile/run-tests?label=tests)](https://github.com/solitweb/laravel-dashboard-qr-code-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/solitweb/laravel-dashboard-qr-code-tile.svg?style=flat-square)](https://packagist.org/packages/solitweb/laravel-dashboard-qr-code-tile)

This tile displays a QR code.

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

<p align="center">
  <img width="510" height="434" src="https://github.com/solitweb/laravel-dashboard-qr-code-tile/raw/master/screenshot.png">
</p>

## Installation

You can install the package via composer:

```bash
composer require solitweb/laravel-dashboard-qr-code-tile
```

In the dashboard config file, you must add this configuration in the tiles key.

```php
// in config/dashboard.php

return [
    // ...
    'tiles' => [
        'qr_code' => [
            'codes' => env('QR_CODE_WIFI'),
        ],
    ],
];
```

## Usage

In your dashboard view you use the `livewire:qr-code-tile` component.

```html
<x-dashboard>
    <livewire:qr-code-tile position="a1" title="Join our WiFi" :code="config('dashboard.tiles.qr_code.codes.0')" />
</x-dashboard>
```

### Customizing the view

If you want to customize the view used to render this tile, run this command:

```bash
php artisan vendor:publish --provider="Solitweb\QRCodeTile\QRCodeTileServiceProvider" --tag="dashboard-qr-code-tile-views"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email stijn@solitweb.be instead of using the issue tracker.

## Credits

- [Spatie](https://github.com/spatie/)
- [Google Charts](https://developers.google.com/chart/infographics/docs/qr_codes)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
