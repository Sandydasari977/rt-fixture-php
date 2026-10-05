<?php

use App\Pricing;
use PHPUnit\Framework\TestCase;

final class PricingTest extends TestCase
{
    public function testNoCouponKeepsTheSubtotal(): void
    {
        $this->assertSame(80.0, Pricing::discountedTotal(80));
    }
}
