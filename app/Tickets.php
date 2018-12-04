<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Tickets
 * @package App
 */
class Tickets extends Model
{
    private $hallParameters = [
        'Big_Hall_Performances' => 60,
        'Discount_Performances' => 80,
        'Big_Hal_Capacity' => 200,
        'Small_Hal_Capacity' => 100,
        'Big_Hall_Sales_day' => 10,
        'Small_Hall_Sales_day' => 5,
    ];

    /**
     * @param $status
     * @param $openingDate
     * @param $queryDate
     * @param $showDate
     * @return array
     */
    public function getTickets($status, $openingDate, $queryDate, $showDate)
    {
        $daysOnShow = Carbon::parse($openingDate)->diffInDays($showDate, false);
        $ticketsLeft = 0;

        if ($daysOnShow <= $this->hallParameters['Big_Hall_Performances']) {

            $hallCapacity = $this->hallParameters['Big_Hal_Capacity'];
            $ticketsAvailable = $this->hallParameters['Big_Hall_Sales_day'];

        } else {

            $hallCapacity = $this->hallParameters['Small_Hal_Capacity'];
            $ticketsAvailable = $this->hallParameters['Small_Hall_Sales_day'];

        }


        if ($status == 'sold out' || $status == 'in the past') {

            $ticketsAvailable = 0;
            $ticketsLeft = 0;

        } elseif ($status == 'sale not started') {

            $ticketsAvailable = 0;
            $ticketsLeft = $hallCapacity;

        } elseif ($status == 'open for sale') {

            $showDateDifference = Carbon::parse($queryDate)->diffInDays($showDate) - 4;
            $ticketsLeft = $hallCapacity - $showDateDifference * $ticketsAvailable;

        }


        return [
            'ticketsAvailable' => $ticketsAvailable,
            'ticketsLeft' => $ticketsLeft
        ];
    }
}
