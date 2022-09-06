<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb5034791304a9ecb4eeca0ac25de906
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb5034791304a9ecb4eeca0ac25de906::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb5034791304a9ecb4eeca0ac25de906::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb5034791304a9ecb4eeca0ac25de906::$classMap;

        }, null, ClassLoader::class);
    }
}