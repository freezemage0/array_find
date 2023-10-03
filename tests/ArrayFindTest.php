<?php declare(strict_types=1);

namespace Freezemage\ArrayUtils\Test;

use PHPUnit\Framework\TestCase;
use function Freezemage\ArrayUtils\find as array_find;

class ArrayFindTest extends TestCase {
    /**
     * @covers Freezemage\ArrayUtils\find
     * @return void
     */
    public function testItFindsValueInArray(): void {
        $item = array_find([1, 2, 3], static fn (int $value): bool => $value === 2);

        $this->assertSame(2, $item);
    }

    /**
     * @covers Freezemage\ArrayUtils\find
     * @return void
     */
    public function testItReturnsNullWhenItemNotFound(): void {
        $item = array_find([1, 2, 3], static fn (): bool => false);

        $this->assertNull($item);
    }
}