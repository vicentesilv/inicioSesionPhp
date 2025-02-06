<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80ff0f9bd05495b9b8927f0d9284ce21
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80ff0f9bd05495b9b8927f0d9284ce21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80ff0f9bd05495b9b8927f0d9284ce21::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80ff0f9bd05495b9b8927f0d9284ce21::$classMap;

        }, null, ClassLoader::class);
    }
}
