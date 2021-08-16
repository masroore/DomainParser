<?php

namespace Novutec\DomainParser\Tests;

use Novutec\DomainParser\AbstractException;
use Novutec\DomainParser\Exception;
use Novutec\DomainParser\Exception\ConnectException;
use Novutec\DomainParser\Exception\OpenFileException;
use Novutec\DomainParser\Exception\UnparsableStringException;
use Novutec\DomainParser\Exception\WriteFileException;
use PHPUnit\Framework\TestCase;

class AbstractExceptionTest extends TestCase
{
    /**
     * @dataProvider exceptionTypes
     *
     * @param string $type
     * @param string $expectedExceptionClass
     */
    public function testCreateUnparsableStringException($type, $expectedExceptionClass)
    {
        $previous = new Exception();
        $exception = AbstractException::factory($type, 'Exception message.', 42, $previous);

        static::assertInstanceOf($expectedExceptionClass, $exception);
        static::assertSame('Exception message.', $exception->getMessage());
        static::assertSame(42, $exception->getCode());
        static::assertSame($previous, $exception->getPrevious());
    }

    public function exceptionTypes()
    {
        yield 'UnparsableStringException' => ['UnparsableString', UnparsableStringException::class];
        yield 'OpenFileException' => ['OpenFile', OpenFileException::class];
        yield 'WriteFileException' => ['WriteFile', WriteFileException::class];
        yield 'ConnectException' => ['Connect', ConnectException::class];
    }
}
