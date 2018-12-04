<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Status extends Model
{
    private $timeParameters = [
        'start_day' => -25,
        'sold_out' => 5,
        'whole_show' => 100
    ];


    public function getStatus($openingDate, $queryDate, $showDate)
    {
        $beginningDifference = Carbon::parse($openingDate)->diffInDays($queryDate, false);
        $daysOnShow = Carbon::parse($openingDate)->diffInDays($showDate, false);
        $daysTillShow = Carbon::parse($queryDate)->diffInDays($showDate, false);


        if ($beginningDifference < $this->timeParameters['start_day']) {
            $status = 'sale not started';
        } elseif ($beginningDifference >= $this->timeParameters['start_day'] && $daysTillShow > $this->timeParameters['Sold_Out_Date']) {
            $status = 'open for sale';
        } elseif ($daysOnShow >= $this->timeParameters['whole_show']) {
            $status = 'in the past';
        } elseif ($daysOnShow <= $this->timeParameters['start_day']) {
            $status = 'sold out';
        } else {
            $status = 'in the past';
        }

        return $status;

    }
}
