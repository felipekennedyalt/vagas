<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb62be04f86693b22274544d7295f8249
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb62be04f86693b22274544d7295f8249::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb62be04f86693b22274544d7295f8249::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb62be04f86693b22274544d7295f8249::$classMap;

        }, null, ClassLoader::class);
    }
}
