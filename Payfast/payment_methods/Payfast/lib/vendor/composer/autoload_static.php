<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c435626ad6d9c78d965a6886f565506
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Payfast\\PayfastCommon\\' => 22,
            'Payfast\\EventEspressoPayfast\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Payfast\\PayfastCommon\\' => 
        array (
            0 => __DIR__ . '/..' . '/payfast/payfast-common/src',
        ),
        'Payfast\\EventEspressoPayfast\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c435626ad6d9c78d965a6886f565506::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c435626ad6d9c78d965a6886f565506::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c435626ad6d9c78d965a6886f565506::$classMap;

        }, null, ClassLoader::class);
    }
}