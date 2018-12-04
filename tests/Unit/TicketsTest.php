<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Tickets;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class TicketTest
 * @package Tests\Unit
 */
class TicketsTest extends TestCase
{

    /**
     * @param $openingDate
     * @param $queryDate
     * @param $showDate
     * @param $status
     * @param $expected
     */
    public function checkTickets($openingDate, $queryDate, $showDate, $status, $expected)
    {
        $ticketsModel = new Tickets();

        $tickets = $ticketsModel->getTickets($openingDate, $queryDate, $showDate, $status);

        $this->assertEquals($expected, $tickets);
    }


    /**
     * @return array
     */
    public function ticketsData()
    {
        return [
            ['2018-04-01', '2018-01-01', '2018-12-01', 'sale not started', [200, 0]],
            ['2018-04-04', '2018-04-04', '2018-04-04', 'sold out', [0, 0]],
            ['2018-04-04', '2018-06-04', '2018-06-19', 'open for sale', [50, 5]],
            ['2018-05-04', '2018-06-04', '2018-06-19', 'open for sale', [100, 10]],
            ['2018-06-04', '2018-06-04', '2018-06-19', 'open for sale', [100, 10]],
            ['2018-04-04', '2018-09-04', '2018-09-04', 'in the past', [0, 0]],
        ];
    }
}
