<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6ae598d5b167926c6437307d89dbed78
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

        spl_autoload_register(array('ComposerAutoloaderInit6ae598d5b167926c6437307d89dbed78', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6ae598d5b167926c6437307d89dbed78', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6ae598d5b167926c6437307d89dbed78::getInitializer($loader));

        $loader->setApcuPrefix('Zo23flixiHXXXJP7aIfyt');
        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit6ae598d5b167926c6437307d89dbed78::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire6ae598d5b167926c6437307d89dbed78($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire6ae598d5b167926c6437307d89dbed78($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}