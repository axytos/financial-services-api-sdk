<?php

/**
 * This is file is necessary because we need to include files like:
 * - /ralouphie/getallheaders/src/getallheaders.php
 * - /guzzlehttp/promises/src/functions_include.php
 * - /guzzlehttp/guzzle/src/functions_include.php
 * - /symfony/deprecation-contracts/function.php
 *
 * However, composer will always generate the same file identifier based on the path.
 * If a shopsystem environment has its own version of one of these packages,
 * ours will not be loaded based on the composer file identifier.
 *
 * So we create this include file which will always have a uniqe identifier and will always be loaded.
 */

$scoperAutoloadPath = __DIR__ . '/../openapi-client/vendor/scoper-autoload.php';
$autoloadFilesPath = __DIR__ . '/../openapi-client/vendor/composer/autoload_files.php';

if (!file_exists($scoperAutoloadPath)) {
    return;
}

if (!file_exists($autoloadFilesPath)) {
    return;
}

include_once $scoperAutoloadPath;

$files = require_once $autoloadFilesPath;

foreach ($files as $file) {
    include_once $file;
}
