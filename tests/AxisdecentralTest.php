<?php
/**
 * Tests for AxisDecentral
 */

use PHPUnit\Framework\TestCase;
use Axisdecentral\Axisdecentral;

class AxisdecentralTest extends TestCase {
    private Axisdecentral $instance;

    protected function setUp(): void {
        $this->instance = new Axisdecentral(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Axisdecentral::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
