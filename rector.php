<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;

return static function (RectorConfig $rectorConfig): void
{
    $rectorConfig->parallel();
    $rectorConfig->paths([
        __DIR__ . '/*/Classes',
        __DIR__ . '/*/Tests'
    ]);
    $rectorConfig->sets([LevelSetList::UP_TO_PHP_70]);
    $rectorConfig->skip([
        StringClassNameToClassConstantRector::class,

        // the autogenerated parsers have to be ignored
        __DIR__ . '/Neos.Eel/Classes/EelParser.php',
        __DIR__ . '/Neos.Eel/Classes/FlowQuery/FizzleParser.php'
    ]);
};
