<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita974d2fa0a32afe48d595e3a09b4d7ec
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita974d2fa0a32afe48d595e3a09b4d7ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita974d2fa0a32afe48d595e3a09b4d7ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita974d2fa0a32afe48d595e3a09b4d7ec::$classMap;

        }, null, ClassLoader::class);
    }
}