<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd23d5f7d1319fd20409ce02ff1e115e1
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WFlive\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WFlive\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd23d5f7d1319fd20409ce02ff1e115e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd23d5f7d1319fd20409ce02ff1e115e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd23d5f7d1319fd20409ce02ff1e115e1::$classMap;

        }, null, ClassLoader::class);
    }
}
