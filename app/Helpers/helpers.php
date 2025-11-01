<?php

if (!function_exists('isActiveRoute')) {
    function isActiveRoute($routeName, $activeClass = 'text-orange', $inactiveClass = '')
    {
        return request()->routeIs($routeName) ? $activeClass : $inactiveClass;
    }
}
