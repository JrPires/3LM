<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd58c36fec1bfcd220253ee59bf5de574
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Junior\\3lmInformatica\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Junior\\3lmInformatica\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd58c36fec1bfcd220253ee59bf5de574::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd58c36fec1bfcd220253ee59bf5de574::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd58c36fec1bfcd220253ee59bf5de574::$classMap;

        }, null, ClassLoader::class);
    }
}