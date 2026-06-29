<?php
/**
 * Tests for CoreCipher
 */

use PHPUnit\Framework\TestCase;
use Corecipher\Corecipher;

class CorecipherTest extends TestCase {
    private Corecipher $instance;

    protected function setUp(): void {
        $this->instance = new Corecipher(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Corecipher::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
