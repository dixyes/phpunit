--TEST--
GH-1149: Test swallows output buffer when run in a separate process
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = __DIR__ . '/1149/Issue1149Test.php';

require_once __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s #StandWithUkraine

.1.                                                                  2 / 2 (100%)2

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
