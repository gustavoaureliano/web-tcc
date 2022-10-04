<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30ada6b7b648a9361f0e94576cfb19fd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30ada6b7b648a9361f0e94576cfb19fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30ada6b7b648a9361f0e94576cfb19fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30ada6b7b648a9361f0e94576cfb19fd::$classMap;

        }, null, ClassLoader::class);
    }
}
