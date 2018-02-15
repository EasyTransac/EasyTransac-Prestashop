<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit885adfb13f80d7aad1adc0abce42e2fa
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EasyTransac\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EasyTransac\\' => 
        array (
            0 => __DIR__ . '/..' . '/easytransac/easytransac-sdk-php/sdk/EasyTransac',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit885adfb13f80d7aad1adc0abce42e2fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit885adfb13f80d7aad1adc0abce42e2fa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}