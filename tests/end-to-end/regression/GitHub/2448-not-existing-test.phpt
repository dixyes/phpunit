--TEST--
#2448: Weird error when trying to run `Test` from `Test.php` but `Test.php` does not exist
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = 'Test.php';

require_once __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main(false);

@unlink(__DIR__ . '/2448/.phpunit.result.cache');
--EXPECTF--
Cannot open file "Test.php".
