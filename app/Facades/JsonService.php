<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class JsonService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'JsonService';
    }
}
