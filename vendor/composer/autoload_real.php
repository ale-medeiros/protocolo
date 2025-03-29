<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbbdb57b8ae55b40b2b38bc4cc10a9d06
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbbdb57b8ae55b40b2b38bc4cc10a9d06', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbbdb57b8ae55b40b2b38bc4cc10a9d06', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbbdb57b8ae55b40b2b38bc4cc10a9d06::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
