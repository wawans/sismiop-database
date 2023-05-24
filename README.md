# Laravel Eloquent Model untuk Database SISMIOP PBB

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wawans/sismiop-database.svg?style=flat-square)](https://packagist.org/packages/wawans/sismiop-database)
[![Total Downloads](https://img.shields.io/packagist/dt/wawans/sismiop-database.svg?style=flat-square)](https://packagist.org/packages/wawans/sismiop-database)
![GitHub Actions](https://github.com/wawans/sismiop-database/actions/workflows/main.yml/badge.svg)

Model dari database SISMIOP PBB (Sistem Manajemen Informasi Objek Pajak - Pajak Bumi dan Bangunan) yang siap digunakan pada Laravel. 

## Laravel Version Compatibility

 Laravel  | Package
:---------|:----------
 7.x.x    | 1.x.x
 8.x.x    | 1.x.x
 9.x.x    | 2.x.x
 10.x.x   | 2.x.x


## Installation

You can install the package via composer:

```bash
composer require wawans/sismiop-database
```

## Configuration (OPTIONAL)

Optionally publish a configuration file by running the following Artisan command.
If config file is not publish, the package will automatically use what is declared on your `.env` file database connection.

```bash
php artisan vendor:publish --tag=sismiop-config
```

This will copy the configuration file to `config/sismiop-database.php`.

> To change/separate database connection, you can set connection data in your `.env` files:

 ```ini
SISMIOP_CONNECTION=sismiop
```

### Testing

```bash
composer test
```

## Catatan

Primary key pada database sismiop menggunakan Composite Keys, sehingga agar relationship dari model satu ke yang lain 
dapat berjalan memerlukan paket ```awobaz/compoships```. 
Silahkan lihat dialamat [repository](https://github.com/topclaudy/compoships) untuk detail dari paket tersebut.  


## Disclaimer

Paket ini tidak menyertakan migration/struktur tabel dari database sismiop. Paket ini hanya berisi model
dari tabel yang sebelumnya sudah ada pada database sismiop. Juga tidak semua tabel dan/atau relasi disertakan
dalam paket ini.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email wakuadratn@gmail.com instead of using the issue tracker.

## Credits

-   [Wawan Setyawan](https://github.com/wawans)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
