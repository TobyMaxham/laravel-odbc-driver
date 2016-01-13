# Laravel SQL Server ODBC Driver

[![Total Downloads](https://poser.pugx.org/TobyMaxham/laravel-odbc-driver/downloads.svg)](https://packagist.org/packages/TobyMaxham/laravel-odbc-driver)
[![Latest Stable Version](https://poser.pugx.org/TobyMaxham/laravel-odbc-driver/v/stable.svg)](https://packagist.org/packages/TobyMaxham/laravel-odbc-driver)
[![Latest Unstable Version](https://poser.pugx.org/TobyMaxham/laravel-odbc-driver/v/unstable.svg)](https://packagist.org/packages/TobyMaxham/laravel-odbc-driver)
[![License](https://poser.pugx.org/TobyMaxham/laravel-odbc-driver/license.svg)](https://packagist.org/packages/TobyMaxham/laravel-odbc-driver)

An ODBC Driver for SQL Server within Laravel

## Installation

Load dependencoes
```ssh
composer require tobymaxham/laravel-odbc-driver 
```

Register the Service Provider
```php

// config/app.php
'providers' => [
    ...
    'TobyMaxham\Database\OdbcServiceProvider',
    ...
];
```