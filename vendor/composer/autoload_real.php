<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc4c9a9b1c6d8ef42bf7ad8ec48c70abf
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

        spl_autoload_register(array('ComposerAutoloaderInitc4c9a9b1c6d8ef42bf7ad8ec48c70abf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc4c9a9b1c6d8ef42bf7ad8ec48c70abf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc4c9a9b1c6d8ef42bf7ad8ec48c70abf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
