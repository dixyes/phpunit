<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Telemetric;

use PHPUnit\Framework\TestCase;

/**
 * @covers \PHPUnit\Event\Telemetric\MemoryUsage
 */
final class MemoryUsageTest extends TestCase
{
    /**
     * @dataProvider provideValidBytes
     */
    public function testFromBytesReturnsMemoryUsage(int $bytes): void
    {
        $memoryUsage = MemoryUsage::fromBytes($bytes);

        $this->assertSame($bytes, $memoryUsage->bytes());
    }

    public function provideValidBytes(): array
    {
        return [
            'int-less-than-zero'    => [-1],
            'int-zero'              => [0],
            'int-greater-than-zero' => [1],
        ];
    }
}