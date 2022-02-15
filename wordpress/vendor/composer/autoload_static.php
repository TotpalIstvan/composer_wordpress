<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9a9a403ca6e448ae9ab4dd3dfe6fa04
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wordpress\\Wordpress\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wordpress\\Wordpress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9a9a403ca6e448ae9ab4dd3dfe6fa04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9a9a403ca6e448ae9ab4dd3dfe6fa04::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc9a9a403ca6e448ae9ab4dd3dfe6fa04::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc9a9a403ca6e448ae9ab4dd3dfe6fa04::$classMap;

        }, null, ClassLoader::class);
    }
}