--TEST--
GH-765: Fatal error triggered in PHPUnit when exception is thrown in data provider of a test with a dependency
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = __DIR__ . '/765/Issue765Test.php';

require_once __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s #StandWithUkraine

.W                                                                  2 / 2 (100%)

Time: %s, Memory: %s

There was 1 warning:

1) Warning
The data provider specified for Issue765Test::testDependent is invalid.
Exception: <no message>
%sIssue765Test.php:%d

WARNINGS!
Tests: 2, Assertions: 1, Warnings: 1.
