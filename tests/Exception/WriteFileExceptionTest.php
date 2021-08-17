<?php

namespace Novutec\DomainParser\Tests\Exception;

use Novutec\DomainParser\Exception\WriteFileException;
use Novutec\DomainParser\Exception\WriteFileException as LegacyWriteFileException;
use PHPUnit\Framework\TestCase;

class WriteFileExceptionTest extends TestCase
{
    public function testExceptionIsCompatibleWithLegacy()
    {
        static::assertInstanceOf(LegacyWriteFileException::class, new WriteFileException());
    }
}
