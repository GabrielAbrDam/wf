<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2b83793713a26bb5f29e5fcab4ea3b8
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInite2b83793713a26bb5f29e5fcab4ea3b8::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}