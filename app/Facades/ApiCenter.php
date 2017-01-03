<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiCenter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ApiCenter';
    }
}