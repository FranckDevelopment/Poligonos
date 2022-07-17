<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bab12e12e5af9b2af72e74fd06329d1
{
    public static $files = array (
        'c9d07b32a2e02bc0fc582d4f0c1b56cc' => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src/autoload.php',
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
        'c2aad8997a98dfc4771bdbffea3d62b7' => __DIR__ . '/..' . '/laminas/laminas-code/polyfill/ReflectionEnumPolyfill.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\Validator\\' => 18,
            'Laminas\\Uri\\' => 12,
            'Laminas\\Stdlib\\' => 15,
            'Laminas\\Soap\\' => 13,
            'Laminas\\ServiceManager\\' => 23,
            'Laminas\\Server\\' => 15,
            'Laminas\\Escaper\\' => 16,
            'Laminas\\Code\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-validator/src',
        ),
        'Laminas\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-uri/src',
        ),
        'Laminas\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-stdlib/src',
        ),
        'Laminas\\Soap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-soap/src',
        ),
        'Laminas\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src',
        ),
        'Laminas\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-server/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'Laminas\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bab12e12e5af9b2af72e74fd06329d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bab12e12e5af9b2af72e74fd06329d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7bab12e12e5af9b2af72e74fd06329d1::$classMap;

        }, null, ClassLoader::class);
    }
}
