--TEST--
phpunit --verbose --order-by=depends,reverse ../execution-order/_files/MultiDependencyTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--debug';
$_SERVER['argv'][] = '--verbose';
$_SERVER['argv'][] = '--order-by=depends,size';
$_SERVER['argv'][] = \realpath(__DIR__ . '/../../_files/TestWithDifferentSizes.php');

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s #StandWithUkraine

Runtime:       %s

Test 'TestWithDifferentSizes::testWithSizeSmall' started
Test 'TestWithDifferentSizes::testWithSizeSmall' ended
Test 'TestWithDifferentSizes::testDataProviderWithSizeSmall with data set #0 (false)' started
Test 'TestWithDifferentSizes::testDataProviderWithSizeSmall with data set #0 (false)' ended
Test 'TestWithDifferentSizes::testDataProviderWithSizeSmall with data set #1 (true)' started
Test 'TestWithDifferentSizes::testDataProviderWithSizeSmall with data set #1 (true)' ended
Test 'TestWithDifferentSizes::testDataProviderWithSizeMedium with data set #0 (false)' started
Test 'TestWithDifferentSizes::testDataProviderWithSizeMedium with data set #0 (false)' ended
Test 'TestWithDifferentSizes::testDataProviderWithSizeMedium with data set #1 (true)' started
Test 'TestWithDifferentSizes::testDataProviderWithSizeMedium with data set #1 (true)' ended
Test 'TestWithDifferentSizes::testWithSizeMedium' started
Test 'TestWithDifferentSizes::testWithSizeMedium' ended
Test 'TestWithDifferentSizes::testWithSizeLarge' started
Test 'TestWithDifferentSizes::testWithSizeLarge' ended
Test 'TestWithDifferentSizes::testWithSizeUnknown' started
Test 'TestWithDifferentSizes::testWithSizeUnknown' ended


Time: %s, Memory: %s

OK (8 tests, 8 assertions)
