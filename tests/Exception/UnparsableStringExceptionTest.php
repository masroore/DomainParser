<?php

namespace Novutec\DomainParser\Tests\Exception;

use Novutec\DomainParser\Exception\UnparsableStringException;
use Novutec\DomainParser\UnparsableStringException as LegacyUnparsableStringException;
use PHPUnit\Framework\TestCase;

class UnparsableStringExceptionTest extends TestCase
{
    public function testExceptionIsCompatibleWithLegacy()
    {
        static::assertInstanceOf(LegacyUnparsableStringException::class, new UnparsableStringException());
    }
}
