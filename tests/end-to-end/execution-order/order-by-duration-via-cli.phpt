--TEST--
phpunit --order-by=duration ./tests/end-to-end/execution-order/_files/TestWithDifferentDurations.php
--FILE--
<?php declare(strict_types=1);
$tmpResultCache = tempnam(sys_get_temp_dir(), __FILE__);
\copy(__DIR__ . '/_files/TestWithDifferentDurations.phpunit.result.cache.txt', $tmpResultCache);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--debug';
$_SERVER['argv'][] = '--order-by=duration';
$_SERVER['argv'][] = '--cache-result';
$_SERVER['argv'][] = '--cache-result-file=' . $tmpResultCache;
$_SERVER['argv'][] = __DIR__ . '/_files/TestWithDifferentDurations.php';

require_once __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();

unlink($tmpResultCache);
--EXPECTF--
PHPUnit %s #StandWithUkraine

Test 'TestWithDifferentDurations::testTwo' started
Test 'TestWithDifferentDurations::testTwo' ended
Test 'TestWithDifferentDurations::testOne' started
Test 'TestWithDifferentDurations::testOne' ended
Test 'TestWithDifferentDurations::testThree' started
Test 'TestWithDifferentDurations::testThree' ended


Time: %s, Memory: %s

OK (3 tests, 3 assertions)
