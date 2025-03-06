<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb31adbb9c67621859c2e425d299df9ca
{
    public static $files = array (
        'cabf7ff7beea9da2c8f95d39f32acd3d' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Iqbalatma\\LaravelUtils\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Iqbalatma\\LaravelUtils\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb31adbb9c67621859c2e425d299df9ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb31adbb9c67621859c2e425d299df9ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb31adbb9c67621859c2e425d299df9ca::$classMap;

        }, null, ClassLoader::class);
    }
}
