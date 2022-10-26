<?php

declare(strict_types=1);

return [
    'prefix' => 'Axytos\FinancialServices',

    'finders' => [],

    'exclude-files' => [],

    'exclude-namespaces' => [],
    'exclude-classes' => [],
    'exclude-functions' => [],
    'exclude-constants' => [],

    // DON'T EXPOSE GLOBALS
    // this will create problems with packages like guzzle which uses namespace-level functions
    'expose-global-constants' => false,
    'expose-global-classes' => false,
    'expose-global-functions' => false,

    'expose-namespaces' => [],
    'expose-classes' => [],
    'expose-functions' => [],
    'expose-constants' => [],

    // patch
    // - class strings for generated reflection code within the openapi client
    // - phpdoc types for phpstan
    'patchers' => [

        // patch OpenAPI/Client
        static function (string $filePath, string $prefix, string $contents): string {

            /** @var string */
            $contents = preg_replace(
                "/\s+OpenAPI\\\\Client/",
                " " . $prefix . '\\\\OpenAPI\\\\Client',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/\s\\\\OpenAPI\\\\Client/",
                " \\\\" . $prefix . '\\\\OpenAPI\\\\Client',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/\|\\\\OpenAPI\\\\Client/",
                "|\\\\" . $prefix . '\\\\OpenAPI\\\\Client',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/'\\\\\\\\OpenAPI\\\\\\\\Client/",
                "'\\\\\\\\" . preg_quote(preg_quote($prefix)) . '\\\\\\\\OpenAPI\\\\\\\\Client',
                $contents
            );

            return $contents;
        },

        // patch GuzzleHttp
        static function (string $filePath, string $prefix, string $contents): string {
            /** @var string */
            $contents = preg_replace(
                "/\s\\\\GuzzleHttp/",
                " \\\\" . $prefix . '\\\\GuzzleHttp',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/\|\\\\GuzzleHttp/",
                "|\\\\" . $prefix . '\\\\GuzzleHttp',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/'\\\\\\\\GuzzleHttp/",
                "'\\\\\\\\" . preg_quote(preg_quote($prefix)) . '\\\\\\\\GuzzleHttp',
                $contents
            );

            return $contents;
        },

        // patch psr
        static function (string $filePath, string $prefix, string $contents): string {
            /** @var string */
            $contents = preg_replace(
                "/\s\\\\Psr\\\\/",
                " \\\\" . $prefix . '\\\\Psr\\\\',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/\|\\\\Psr\\\\/",
                "|\\\\" . $prefix . '\\\\Psr\\\\',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/'\\\\\\\\Psr\\\\\\\\/",
                "'\\\\\\\\" . preg_quote(preg_quote($prefix)) . '\\\\\\\\Psr\\\\\\\\',
                $contents
            );

            return $contents;
        },

        // patch ralouphie/getallheaders
        static function (string $filePath, string $prefix, string $contents): string {

            /** @var string */
            $contents = preg_replace(
                "/\s\\\\getallheaders\\(/",
                " \\\\" . $prefix . '\\\\getallheaders(',
                $contents
            );

            /** @var string */
            $contents = preg_replace(
                "/\\\\function_exists\\('getallheaders/",
                "\\function_exists('\\" . $prefix . '\\getallheaders',
                $contents
            );

            return $contents;
        }
    ],
];
