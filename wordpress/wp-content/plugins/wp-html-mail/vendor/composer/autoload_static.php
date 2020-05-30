<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ed2230ac70257f403e8e80f0f3a3d71
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\helper\\' => 12,
            'voku\\CssToInlineStyles\\' => 23,
        ),
        'S' => 
        array (
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'B' => 
        array (
            'Barryvdh\\Composer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper',
        ),
        'voku\\CssToInlineStyles\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/css-to-inline-styles/src',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Barryvdh\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/barryvdh/composer-cleanup-plugin/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sabberworm\\CSS' => 
            array (
                0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ed2230ac70257f403e8e80f0f3a3d71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ed2230ac70257f403e8e80f0f3a3d71::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9ed2230ac70257f403e8e80f0f3a3d71::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
