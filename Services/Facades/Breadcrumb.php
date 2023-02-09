<?php

namespace Modules\Themes\Services\Facades;

use Illuminate\Support\Facades\Facade;

class Breadcrumb extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return "Breadcrumb";
    }
}
