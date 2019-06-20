<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbacdc755e9dc4d2cd523688574d70dcf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbacdc755e9dc4d2cd523688574d70dcf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbacdc755e9dc4d2cd523688574d70dcf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
