<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e791436510ecdc0ff9841cbd97e0286
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e791436510ecdc0ff9841cbd97e0286::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e791436510ecdc0ff9841cbd97e0286::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e791436510ecdc0ff9841cbd97e0286::$classMap;

        }, null, ClassLoader::class);
    }
}
