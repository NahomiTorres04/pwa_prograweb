<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f503718348281771f7188edadbb5b9b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Salman\\CrudGenerator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Salman\\CrudGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/salmanzafar/laravel-crud-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f503718348281771f7188edadbb5b9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f503718348281771f7188edadbb5b9b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
