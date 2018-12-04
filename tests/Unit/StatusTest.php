<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class StatusTest
 * @package Tests\Unit
 */
class StatusTest extends TestCase
{

    /**
     * @param $openingDate
     * @param $queryDate
     * @param $showDate
     * @param $expected
     */
    public function checkStatus($openingDate, $queryDate, $showDate, $expected)
    {

        $StatusModel = new Status();
        $status = $StatusModel->getStatus($openingDate, $queryDate, $showDate);

        $this->assertEquals($expected, $status);

    }


    /**
     * @return array
     */
    public function statusData()
    {
        return [
          ['2018-12-04', '2018-12-04', '2018-10-04', null],
          ['2018-04-04', '2018-04-04', '2018-04-04', 'sold out'],
          ['2018-04-04', '2018-01-04', '2018-12-04', 'sale not started'],
          ['2018-04-04', '2018-06-04', '2018-06-20', 'open for sale'],
          ['2018-05-04', '2018-06-04', '2018-06-20', 'open for sale'],
          ['2018-06-04', '2018-06-04', '2018-06-20', 'open for sale'],
          ['2018-04-04', '2018-08-04', '2018-08-04', 'in the past'],
          ['2018-04-04', '2018-04-10', '2018-01-04', 'in the past']
        ];
    }

}
