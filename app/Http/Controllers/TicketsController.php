<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvDataLoader;
use App\Inventory;
use Psy\Util\Json;

/**
 * Class TicketsController
 * @property Inventory inventory
 * @package App\Http\Controllers
 */
class TicketsController extends Controller
{
    private $loadData;

    /**
     * TicketsController constructor.
     * @param CsvDataLoader $loader
     * @param Inventory $inventory
     * @throws \League\Csv\CannotInsertRecord
     * @throws \League\Csv\Exception
     */
    public function __construct(CsvDataLoader $loader, Inventory $inventory)
    {
        $this->inventory = $inventory;
        $this->loadData = $loader->loadData('shows.csv');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $showDate = $request->has('show-date') ? $request->get('show-date') : date('Y-m-d');
        $shows = $this->inventory->getInventory($this->loadData, date('Y-m-d'), $showDate, true);


        return view('tickets.index', compact('shows'));
    }


    /**
     * @param Request $request
     * @return string
     */
    public function api(Request $request)
    {

        $showDate = $request->has('showDate') ? $request->get('showDate') : date('Y-m-d');
        $queryDate = $request->has('queryDate') ? $request->get('queryDate') : date('Y-m-d');

        $shows = $this->inventory->getInventory($this->loadData, $queryDate, $showDate, true);


        return Json::encode($shows, JSON_PRETTY_PRINT);

    }

}
