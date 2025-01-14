--TEST--
#2137: Error message for invalid dataprovider
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = __DIR__ . '/2137/Issue2137Test.php';

require_once __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s #StandWithUkraine

WW                                                                  2 / 2 (100%)

Time: %s, Memory: %s

There were 2 warnings:

1) Warning
The data provider specified for Issue2137Test::testBrandService is invalid.
Data set #0 is invalid.

2) Warning
The data provider specified for Issue2137Test::testSomethingElseInvalid is invalid.
Data set #0 is invalid.

WARNINGS!
Tests: 2, Assertions: 0, Warnings: 2.
