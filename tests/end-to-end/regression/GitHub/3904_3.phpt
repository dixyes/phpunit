--TEST--
https://github.com/sebastianbergmann/phpunit/issues/3904
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][4] = __DIR__ . '/3904/Issue3904_3Test.php';

require_once __DIR__ . '/../../../bootstrap.php';

try {
    PHPUnit\TextUI\Command::main();
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>
--EXPECTF--
PHPUnit %s #StandWithUkraine

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
