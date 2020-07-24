<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5a83788fac655f47c7852662fc45bf1
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Web\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Web\\' => 
        array (
            0 => __DIR__ . '/../..',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5a83788fac655f47c7852662fc45bf1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5a83788fac655f47c7852662fc45bf1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}