<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\TestStatus;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
abstract class TestStatus
{
    private string $message;

    public static function from(int $status): self
    {
        switch ($status) {
            case 0:
                return self::success();

            case 1:
                return self::skipped();

            case 2:
                return self::incomplete();

            case 3:
                return self::failure();

            case 4:
                return self::error();

            case 5:
                return self::risky();

            case 6:
                return self::warning();

            default:
                return self::unknown();
        }
    }

    public static function unknown(): self
    {
        return new Unknown;
    }

    public static function success(): self
    {
        return new Success;
    }

    public static function skipped(string $message = ''): self
    {
        return new Skipped($message);
    }

    public static function incomplete(string $message = ''): self
    {
        return new Incomplete($message);
    }

    public static function failure(string $message = ''): self
    {
        return new Failure($message);
    }

    public static function error(string $message = ''): self
    {
        return new Error($message);
    }

    public static function warning(string $message = ''): self
    {
        return new Warning($message);
    }

    public static function risky(string $message = ''): self
    {
        return new Risky($message);
    }

    private function __construct(string $message = '')
    {
        $this->message = $message;
    }

    /**
     * @psalm-assert-if-true Known $this
     */
    public function isKnown(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Unknown $this
     */
    public function isUnknown(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Success $this
     */
    public function isSuccess(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Skipped $this
     */
    public function isSkipped(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Incomplete $this
     */
    public function isIncomplete(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Failure $this
     */
    public function isFailure(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Error $this
     */
    public function isError(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Warning $this
     */
    public function isWarning(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true Risky $this
     */
    public function isRisky(): bool
    {
        return false;
    }

    public function message(): string
    {
        return $this->message;
    }

    abstract public function asInt(): int;

    abstract public function asString(): string;
}
