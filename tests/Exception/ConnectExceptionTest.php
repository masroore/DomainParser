<?php

namespace Novutec\DomainParser\Tests\Exception;

use Novutec\DomainParser\ConnectException as LegacyConnectException;
use Novutec\DomainParser\Exception\ConnectException;
use PHPUnit\Framework\TestCase;

class ConnectExceptionTest extends TestCase
{
    public function testExceptionIsCompatibleWithLegacy()
    {
        static::assertInstanceOf(LegacyConnectException::class, new ConnectException());
    }
}
