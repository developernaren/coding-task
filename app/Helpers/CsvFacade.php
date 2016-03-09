<?php namespace App\Helpers;

use Illuminate\Support\Facades\Facade;

class CsvFacade extends Facade
{

    public static function getFacadeAccessor()
    {

        return 'csv';
    }


}