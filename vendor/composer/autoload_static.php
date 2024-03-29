<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf78e1c67b567f0a005ba375d024931b3
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf78e1c67b567f0a005ba375d024931b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf78e1c67b567f0a005ba375d024931b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf78e1c67b567f0a005ba375d024931b3::$classMap;

        }, null, ClassLoader::class);
    }
}
