<?php

namespace Modules\Themes\Services;

use Illuminate\Support\Facades\Route;

class BreadcrumbService {

    public static string $breadcrumbsViewName =   'themes::components.breadcrumbs.index';

    static array $data     =   array([
        'name'      =>  'acp.backend.index',
        'items'     =>  [
            '1' =>  [
                'route' =>  'acp.backend.index',
                'name'  =>  'Admin'
            ],
            '2' =>  [
                'route' =>  'blog.backend.index',
                'name'  =>  'Blog'
            ],
            '3' =>  [
                'route' =>  'blog.backend.index',
                'name'  =>  'Blog3'
            ]
        ]
    ]);

    public static function render()
    {
        if (self::getAllData())
        {
            return view(self::$breadcrumbsViewName, ['data' => self::getAllData()]);
        }

        return false;
    }

    protected static function getAllData(){

        foreach (self::$data as $data) {

            if ($data['name'] == Route::currentRouteName())
            {
                return $data;
            }
        }

        return false;
    }
}
