<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit969ae310edfab908b86eaecca7b301ea7e09a6e5e7e282ebc85c25e0fac417d81726127769
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Axytos\\FinancialServices\\Psr\\Http\\Message\\' => 42,
            'Axytos\\FinancialServices\\Psr\\Http\\Client\\' => 41,
            'Axytos\\FinancialServices\\OpenAPI\\Client\\' => 40,
            'Axytos\\FinancialServices\\GuzzleHttp\\Psr7\\' => 41,
            'Axytos\\FinancialServices\\GuzzleHttp\\Promise\\' => 44,
            'Axytos\\FinancialServices\\GuzzleHttp\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Axytos\\FinancialServices\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Axytos\\FinancialServices\\Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Axytos\\FinancialServices\\OpenAPI\\Client\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Axytos\\FinancialServices\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'Axytos\\FinancialServices\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'Axytos\\FinancialServices\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    /**
     * @param \Composer\Autoload\ClassLoader $loader
     */
    public static function getInitializer($loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit969ae310edfab908b86eaecca7b301ea7e09a6e5e7e282ebc85c25e0fac417d81726127769::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit969ae310edfab908b86eaecca7b301ea7e09a6e5e7e282ebc85c25e0fac417d81726127769::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit969ae310edfab908b86eaecca7b301ea7e09a6e5e7e282ebc85c25e0fac417d81726127769::$classMap;

        }, null, ClassLoader::class);
    }
}
