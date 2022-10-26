<?php

declare(strict_types=1);

run($argv);

function run(array $args): void
{

    if (!isset($args[1])) {
        echo "Argument 1 missing! Provide path to config file.\n";
        exit(1);
    }

    if (!isset($args[2])) {
        echo "Argument 2 missing! Provide workspace path.\n";
        exit(1);
    }

    if (!isset($args[3])) {
        echo "Argument 2 missing! Provide output path.\n";
        exit(1);
    }

    if (!isset($args[4])) {
        echo "Argument 4 missing! Provide ApiKey for OpenAPI Spec.\n";
        exit(1);
    }

    $configFilePath = realPackagePath(strval($args[1]));
    $workspacePath = realPackagePath(strval($args[2]));
    $outputPath = realPackagePath(strval($args[3]));
    $apiKey = strval($args[4]);

    generateOpenAPIClient($configFilePath, $workspacePath, $apiKey);
    scopeOpenAPIClient($workspacePath, $outputPath);
    runTests();
}

function generateOpenAPIClient(string $configFilePath, string $workspacePath, string $apiKey): void
{
    $openAPIGeneratorCliVersion = getOpenAPIGeneratorCliVerion($configFilePath);

    system("
    docker run --rm \
        --user \"$(id -u):$(id -g)\" \
        --volume ${workspacePath}:/local \
        --volume ${configFilePath}:/config.json \
        openapitools/openapi-generator-cli:$openAPIGeneratorCliVersion generate \
            --output /local \
            --config /config.json \
            --auth 'X-API-KEY:${apiKey}' 
    ");
}

function scopeOpenAPIClient(string $workspacePath, string $outputPath): void
{
    // clean install of production dependencies for openapi client
    system("rm -rf $workspacePath/vendor");
    system("rm -f $workspacePath/composer.lock");
    system("composer install --no-dev --working-dir=$workspacePath");

    // remove previosly generated openapi client code
    system("rm -rf $outputPath");

    // scope openapi client code
    system("vendor/bin/php-scoper add-prefix --stop-on-failure --output-dir=$outputPath $workspacePath");

    // copy openapi generator summary files
    system("cp -rf $workspacePath/.openapi-generator $outputPath/.openapi-generator");

    // dump autoloader
    system("composer dump-autoload --working-dir=$outputPath");

    // remove unnecessary composer.json
    system("rm -f $outputPath/composer.json");

    // create .gitignore, ingore nothing
    system("echo !*/ > $outputPath/.gitignore");

    // format output
    system("vendor/bin/phpcbf");
}

function runTests(): void
{
    system("vendor/bin/phpunit");
    system("vendor/bin/phpstan");
    system("vendor/bin/phpcs");
}

function realPackagePath(string $relativePath): string
{
    $packageRoot = realpath(__DIR__ . '/..');
    return $packageRoot . '/' . $relativePath;
}

function getOpenAPIGeneratorCliVerion(string $configFilePath): string
{
    /** @var string */
    $json = file_get_contents($configFilePath);
    /** @var array */
    $config = json_decode($json, true);
    return strval($config['version']);
}
