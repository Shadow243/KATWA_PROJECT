<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 22/09/2017
 * Time: 13:42
 */

namespace App\Helpers;


class Helpers
{
    public static function setCurrent($route)
    {
        if (!function_exists('currentRoute')) {
            function currentRoute($route)
            {
                return request()->url() == route($route) ? ' class=current' : '';
            }
        }
    }




    public static function setActive($route)
    {
        if(!function_exists('setActive'))
        {
            return request()->url() == route($route) ? ' class=active' : '';
        }

    }

}