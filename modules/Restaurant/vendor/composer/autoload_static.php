<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

use Closure;

class ComposerStaticInitb7cbfc660a0060a2eb2e9640702dd3eb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Module\\Restaurant\\Model\\' => 24,
            'Module\\Restaurant\\Middleware\\' => 29,
            'Module\\Restaurant\\Controller\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Module\\Restaurant\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Database/Model',
        ),
        'Module\\Restaurant\\Middleware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http/Middleware',
        ),
        'Module\\Restaurant\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http/Controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7cbfc660a0060a2eb2e9640702dd3eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7cbfc660a0060a2eb2e9640702dd3eb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}