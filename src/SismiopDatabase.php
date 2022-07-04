<?php

namespace Wawans\SismiopDatabase;

class SismiopDatabase
{
    /**
     * Indicates if SISMIOP Database's migrations will be run.
     *
     * @var bool
     */
    public static $runsMigrations = true;

    /**
     * Default route binding delimiter.
     *
     * @var string
     */
    public static $routeDelimiter = '-';

    /**
     * Determine if SISMIOP Database's migrations should be run.
     *
     * @return bool
     */
    public static function shouldRunMigrations()
    {
        return static::$runsMigrations;
    }

    /**
     * Configure SISMIOP Database to not register its migrations.
     *
     * @return static
     */
    public static function ignoreMigrations()
    {
        static::$runsMigrations = false;

        return new static;
    }

    /**
     * Configure route binding to use custom delimiter.
     *
     * @param string $delimiter
     * @return static
     */
    public static function useRouteDelimiter(string $delimiter = '-')
    {
        static::$routeDelimiter = $delimiter;

        return new static;
    }
}
