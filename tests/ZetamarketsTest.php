<?php
/**
 * Tests for ZetaMarkets
 */

use PHPUnit\Framework\TestCase;
use Zetamarkets\Zetamarkets;

class ZetamarketsTest extends TestCase {
    private Zetamarkets $instance;

    protected function setUp(): void {
        $this->instance = new Zetamarkets(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zetamarkets::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
