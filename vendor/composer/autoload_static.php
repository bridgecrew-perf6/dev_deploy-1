<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51e6e6771bc443e20279b9158a10aabb
{
    public static $files = array (
        'c9d07b32a2e02bc0fc582d4f0c1b56cc' => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laminas\\Validator\\' => 18,
            'Laminas\\Uri\\' => 12,
            'Laminas\\Stdlib\\' => 15,
            'Laminas\\ServiceManager\\' => 23,
            'Laminas\\Loader\\' => 15,
            'Laminas\\Http\\' => 13,
            'Laminas\\Feed\\' => 13,
            'Laminas\\Escaper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laminas\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-validator/src',
        ),
        'Laminas\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-uri/src',
        ),
        'Laminas\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-stdlib/src',
        ),
        'Laminas\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src',
        ),
        'Laminas\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-loader/src',
        ),
        'Laminas\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-http/src',
        ),
        'Laminas\\Feed\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-feed/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51e6e6771bc443e20279b9158a10aabb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51e6e6771bc443e20279b9158a10aabb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51e6e6771bc443e20279b9158a10aabb::$classMap;

        }, null, ClassLoader::class);
    }
}
