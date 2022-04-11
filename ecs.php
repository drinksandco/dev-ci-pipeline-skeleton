<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

/**
 * @see https://tomasvotruba.com/blog/2018/06/04/how-to-migrate-from-php-code-sniffer-to-easy-coding-standard/#comment-4086561141
 */
return function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::STRICT);
};
