<?php

namespace TobyMaxham\Database;

use Illuminate\Support\ServiceProvider;
use TobyMaxham\Database\Connectors\DBLIBConnector;
use Illuminate\Database\DatabaseManager as Factory;

/**
 * Class OdbcServiceProvider
 * @package TobyMaxham\Database
 * @author Tobias Maxham <git2016@maxham.de>
 */
class OdbcServiceProvider extends ServiceProvider
{

    public function boot()
    {
        /** @var Factory $factory */
        $factory = $this->app['db'];

        $factory->extend('dblib', function ($config)
        {
            if (!isset($config['prefix'])) $config['prefix'] = '';
            $connector = new DBLIBConnector();
            $pdo = $connector->connect($config);
            $db = new DBLIBConnection($pdo, $config['database'], $config['prefix']);
            return $db;
        });
    }

    public function register()
    {
        // register
    }

}