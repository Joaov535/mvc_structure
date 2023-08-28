<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb7d2438cc04416ac15fd67301a513fe
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb7d2438cc04416ac15fd67301a513fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb7d2438cc04416ac15fd67301a513fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb7d2438cc04416ac15fd67301a513fe::$classMap;

        }, null, ClassLoader::class);
    }
}
