--TEST--
phpunit --order-by=no-depends,reverse --cache-result --cache-result-file ./tests/_files/MultiDependencyTest.php
--FILE--
<?php declare(strict_types=1);
$target = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--ignore-dependencies';   // keep coverage for legacy CLI option
$_SERVER['argv'][] = '--order-by=reverse';
$_SERVER['argv'][] = '--cache-result';
$_SERVER['argv'][] = '--cache-result-file=' . $target;
$_SERVER['argv'][] = realpath(__DIR__ . '/../execution-order/_files/MultiDependencyTest.php');

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Command::main(false);

print file_get_contents($target);

unlink($target);
--EXPECTF--
PHPUnit %s #StandWithUkraine

.SS..                                                               5 / 5 (100%)

Time: %s, Memory: %s

OK, but incomplete, skipped, or risky tests!
Tests: 5, Assertions: 3, Skipped: 2.
{"version":1,"defects":{"MultiDependencyTest::testFour":1,"MultiDependencyTest::testThree":1},"times":{"MultiDependencyTest::testFive":%f,"MultiDependencyTest::testFour":%f,"MultiDependencyTest::testThree":%f,"MultiDependencyTest::testTwo":%f,"MultiDependencyTest::testOne":%f}}
