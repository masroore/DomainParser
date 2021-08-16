<?php

namespace Novutec\DomainParser\Tests\Exception;

use Novutec\DomainParser\Exception\OpenFileException;
use Novutec\DomainParser\OpenFileException as LegacyOpenFileException;
use PHPUnit\Framework\TestCase;

class OpenFileExceptionTest extends TestCase
{
    public function testExceptionIsCompatibleWithLegacy()
    {
        static::assertInstanceOf(LegacyOpenFileException::class, new OpenFileException());
    }
}
