<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbdb57b8ae55b40b2b38bc4cc10a9d06
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbbdb57b8ae55b40b2b38bc4cc10a9d06::$classMap;

        }, null, ClassLoader::class);
    }
}
