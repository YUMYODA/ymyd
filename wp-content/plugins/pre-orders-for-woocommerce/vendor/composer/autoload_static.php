<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit030f9ec5ad32a34e83e9991f5cc85bb1
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Woocommerce_Preorders\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Woocommerce_Preorders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit030f9ec5ad32a34e83e9991f5cc85bb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit030f9ec5ad32a34e83e9991f5cc85bb1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}