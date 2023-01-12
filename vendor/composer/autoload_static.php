<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit152bd3e8b5d904b7b1fdf276a4471519
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sayedzaid\\Contact\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sayedzaid\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit152bd3e8b5d904b7b1fdf276a4471519::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit152bd3e8b5d904b7b1fdf276a4471519::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit152bd3e8b5d904b7b1fdf276a4471519::$classMap;

        }, null, ClassLoader::class);
    }
}
