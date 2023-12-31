<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2132a877c817e5e4e6a3029b4f8b8f5d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2132a877c817e5e4e6a3029b4f8b8f5d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2132a877c817e5e4e6a3029b4f8b8f5d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2132a877c817e5e4e6a3029b4f8b8f5d::$classMap;

        }, null, ClassLoader::class);
    }
}
