<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb29783d5235e4c092ca4cdf55fc3e0b9
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb29783d5235e4c092ca4cdf55fc3e0b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb29783d5235e4c092ca4cdf55fc3e0b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb29783d5235e4c092ca4cdf55fc3e0b9::$classMap;

        }, null, ClassLoader::class);
    }
}
