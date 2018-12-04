<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use League\Csv\Writer;

/**
 * Class CsvDataLoader
 * @package App
 */
class CsvDataLoader extends Model
{
    /**
     * @param $fileName
     * @return array
     * @throws \League\Csv\CannotInsertRecord
     * @throws \League\Csv\Exception
     */
    public function loadData($fileName)
    {
        $header = ['title', 'opening_date', 'genre'];
        $csv = Writer::createFromPath(storage_path('app/'.$fileName), 'r+');
        $csv->insertOne($header);

        $data = Reader::createFromPath(storage_path('app/'.$fileName), 'r');
        $data->setHeaderOffset(0);

        $inventory = [];

        foreach ($data as $row){
            $inventory[] = $row;
        }

        return $inventory;
    }
}
