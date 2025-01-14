--TEST--
GH-3379: Dependent test of skipped test has status -1
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--configuration';
$_SERVER['argv'][] = __DIR__ . '/3379/';

require_once __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s #StandWithUkraine

Skipped test testOne, status: 1
SSkipped test testTwo, status: 1
S                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK, but incomplete, skipped, or risky tests!
Tests: 2, Assertions: 0, Skipped: 2.
