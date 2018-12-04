<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Pricing;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class PricingTest
 * @package Tests\Unit
 */
class PricingTest extends TestCase
{

    /**
     * @param $genre
     * @param $daysOnShow
     * @param $expected
     */
    public function checkPricing($genre, $daysOnShow, $expected)
    {

        $PricingModel = new Pricing();
        $pricing = $PricingModel->getPrice($genre, $daysOnShow);

        $this->assertEquals($expected, $pricing);

    }


    /**
     * @return array
     */
    public function pricingData()
    {
        return [
            ['musical', 1, 70],
            ['comedy', 1, 50],
            ['drama', 1, 50],
            ['musical', 80, 70],
            ['comedy', 80, 50],
            ['drama', 80, 40],
            ['musical', 81, 56],
            ['comedy', 81, 40],
            ['drama', 81, 32],
            ['musical', 20, 70],
            ['comedy', 20, 50],
            ['drama', 20, 40]
        ];
    }

}
