<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d8a6166ad4f4610e8b5ba3e10217c0e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'CRest' => __DIR__ . '/..' . '/kafka0238/crest/src/crest.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d8a6166ad4f4610e8b5ba3e10217c0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d8a6166ad4f4610e8b5ba3e10217c0e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1d8a6166ad4f4610e8b5ba3e10217c0e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1d8a6166ad4f4610e8b5ba3e10217c0e::$classMap;

        }, null, ClassLoader::class);
    }
}
