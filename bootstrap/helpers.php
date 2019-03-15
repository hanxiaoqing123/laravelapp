<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/4
 * Time: 10:04
 */
function test_helper(){
    return "OK";
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}