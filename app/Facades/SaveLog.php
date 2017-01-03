<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class SaveLog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SaveLog';
    }
}