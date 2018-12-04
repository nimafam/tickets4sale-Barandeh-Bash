<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    private $pricingParameters = [
        'musical' => 70,
        'comedy' => 50,
        'drama' => 40,
        'Discount_Start_Day' => 81,
        'Discount' => 0.8
    ];


    public function getPrice($genre, $daysOnShow)
    {
        $price = $this->pricingParameters[strtolower($genre)];

        if($daysOnShow >= $this->pricingParameters['Discount_Start_Day']){
            $price *= $this->pricingParameters['Discount'];
        }


        return $price;
    }
}
