<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util\Metadata;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestWith extends Metadata
{
    private string $json;

    public function __construct(string $json)
    {
        $this->json = $json;
    }

    public function isTestWith(): bool
    {
        return true;
    }

    public function json(): string
    {
        return $this->json;
    }
}