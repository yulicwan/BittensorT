<?php
/**
 * Tests for BittensorTAO
 */

use PHPUnit\Framework\TestCase;
use Bittensortao\Bittensortao;

class BittensortaoTest extends TestCase {
    private Bittensortao $instance;

    protected function setUp(): void {
        $this->instance = new Bittensortao(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bittensortao::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
