<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3e49b8f3391deef74fc03416fe03955
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LearnPattenrs\\' => 14,
        ),
        'B' => 
        array (
            'Builder\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LearnPattenrs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Builder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Creational/Builder',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3e49b8f3391deef74fc03416fe03955::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3e49b8f3391deef74fc03416fe03955::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
