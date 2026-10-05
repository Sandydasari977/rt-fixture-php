<?php

namespace App;

final class Pricing
{
    /** Total after a coupon: SAVE10 takes 10% off orders of 50 or more. */
    public static function discountedTotal(float $subtotal, ?string $coupon = null): float
    {
        if ($coupon === 'SAVE10' && $subtotal >= 50) {
            return round($subtotal * 0.9, 2);
        }
        return $subtotal;
    }
}
