<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9318c7d63734bf84d105fd3ba76e3cf5
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tests\\' => 6,
        ),
        'f' => 
        array (
            'framework\\dao\\' => 14,
            'framework\\' => 10,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/src/tests',
        ),
        'framework\\dao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/framework/dao',
        ),
        'framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/maximo-perez-villalba/framework-environment/src/framework',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9318c7d63734bf84d105fd3ba76e3cf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9318c7d63734bf84d105fd3ba76e3cf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9318c7d63734bf84d105fd3ba76e3cf5::$classMap;

        }, null, ClassLoader::class);
    }
}