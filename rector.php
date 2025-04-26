<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/scripts',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        // codingStyle: true,
        naming: true,
        privatization: true,
        typeDeclarations: true,
        rectorPreset: true,
    );
