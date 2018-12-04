<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Inventory extends Model
{
    public function getInventory($shows, $queryDate, $showDate, $showPrice = false)
    {
        $inventory = [];

        foreach ($shows as $show){
            $data = $this->getInventoryRecords($show, $queryDate, $showDate, $showPrice);

            if ($inventory === null){
                continue;
            }

            if(!isset($inventory[$show['genre']])){
                $inventory[$show['genre']] = [
                    'genre' => strtolower($show['genre']),
                    'shows' => []
                ];
            }

            $inventory[$show['genre']]['shows'][] = $data;
        }

        return $inventory;
    }

    private function getInventoryRecords($show, $queryDate, $showDate, $price){
        $openingDate = $show['opening_date'];
        $status = new Status();
        $showStatus = $status->getStatus($openingDate, $queryDate, $showDate);

        $tickets = new Tickets();
        $showTickets = $tickets->getTickets($showStatus, $openingDate, $queryDate, $showDate);

        $data = [
            'title' => $show['title'],
            'opening_date' => $show['opening_date'],
            'tickets_left' => $showTickets['ticketsLeft'],
            'tickets_available' => $showTickets['ticketsAvailable'],
            'status' => $showStatus
        ];

        if($price){
            $showPrice = new Pricing();
            $data['price'] = $showPrice->getPrice($show['genre'], Carbon::parse($openingDate)->diffInDays($showDate, false));
        }

        return $data;
    }
}
