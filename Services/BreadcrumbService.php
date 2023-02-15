<?php

namespace Modules\Themes\Services;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class BreadcrumbService {

    public static string $breadcrumbsViewName =   'themes::components.breadcrumbs.index';

    public static array $data     =   array();

    public static function add (string $parent, array $items): void
    {
        $newData    =   array([
            'name'      =>  $parent,
            'items'     =>  $items
        ]);

        self::$data[]   =   $newData;

    }

    /**
     * Return the View of the Breadcrumb for rendering and inserting in Blade Views
     *
     */
    public static function render()
    {
        //dd(self::getAllData());

        if (self::getAllData())
        {
            return view(self::$breadcrumbsViewName, ['data' => self::getAllData()]);
        }
        return false;
    }


    public static function getAllData(){

        foreach (self::$data as $parentData)
        {
            foreach ($parentData as $data)
            {
                if ($data['name'] == Route::currentRouteName())
                {
                    return $data;
                }
            }
        }
        return false;
    }
}
