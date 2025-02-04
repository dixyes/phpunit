--TEST--
phpunit --process-isolation ../../_files/FailureTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--process-isolation';
$_SERVER['argv'][] = __DIR__ . '/../_files/FailureTest.php';

require_once __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s #StandWithUkraine

FFFFFFFFFFFFF                                                     13 / 13 (100%)

Time: %s, Memory: %s

There were 13 failures:

1) FailureTest::testAssertArrayEqualsArray
message
Failed asserting that two arrays are equal.
--- Expected
+++ Actual
@@ @@
 Array (
-    0 => 1
+    0 => 2
 )

%s:%i

2) FailureTest::testAssertIntegerEqualsInteger
message
Failed asserting that 2 matches expected 1.

%s:%i

3) FailureTest::testAssertObjectEqualsObject
message
Failed asserting that two objects are equal.
--- Expected
+++ Actual
@@ @@
 stdClass Object (
-    'foo' => 'bar'
+    'bar' => 'foo'
 )

%s:%i

4) FailureTest::testAssertNullEqualsString
message
Failed asserting that 'bar' matches expected null.

%s:%i

5) FailureTest::testAssertStringEqualsString
message
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
-'foo'
+'bar'

%s:%i

6) FailureTest::testAssertTextEqualsText
message
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
 'foo\n
-bar\n
+baz\n
 '

%s:%i

7) FailureTest::testAssertStringMatchesFormat
message
Failed asserting that string matches format description.
--- Expected
+++ Actual
@@ @@
-*%s*
+**

%s:%i

8) FailureTest::testAssertNumericEqualsNumeric
message
Failed asserting that 2 matches expected 1.

%s:%i

9) FailureTest::testAssertTextSameText
message
Failed asserting that two strings are identical.
--- Expected
+++ Actual
@@ @@
-'foo'
+'bar'

%s:%i

10) FailureTest::testAssertObjectSameObject
message
Failed asserting that two variables reference the same object.

%s:%i

11) FailureTest::testAssertObjectSameNull
message
Failed asserting that null is identical to an object of class "stdClass".

%s:%i

12) FailureTest::testAssertFloatSameFloat
message
Failed asserting that 1.5 is identical to 1.0.

%s:%i

13) FailureTest::testAssertStringMatchesFormatFile
Failed asserting that string matches format description.
--- Expected
+++ Actual
@@ @@
-FOO
+...BAR...

%s:%i

FAILURES!
Tests: 13, Assertions: 14, Failures: 13.
