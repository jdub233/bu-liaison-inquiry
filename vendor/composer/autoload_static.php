<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83a43bff8caa94ded7a01ab7f29fe114
{
    public static $classMap = array (
        'BU_Liaison_Inquiry\\Mock_Spectrum_API' => __DIR__ . '/../..' . '/includes/class-mock-spectrum-api.php',
        'BU_Liaison_Inquiry\\Plugin' => __DIR__ . '/../..' . '/includes/class-plugin.php',
        'BU_Liaison_Inquiry\\Spectrum_API' => __DIR__ . '/../..' . '/includes/class-spectrum-api.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit83a43bff8caa94ded7a01ab7f29fe114::$classMap;

        }, null, ClassLoader::class);
    }
}
