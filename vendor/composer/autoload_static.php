<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54160b6d6f741abe739c58eee0d56380
{
    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'ktux\\models\\FacturaModel' => __DIR__ . '/../..' . '/ktux/models/FacturaModel.php',
        'ktux\\models\\PDF' => __DIR__ . '/../..' . '/ktux/models/PDF.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit54160b6d6f741abe739c58eee0d56380::$classMap;

        }, null, ClassLoader::class);
    }
}