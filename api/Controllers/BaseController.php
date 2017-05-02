<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:55
 */
abstract class BaseController
{
    public abstract static function MainAction();

    public static function printJSON($data){
        //header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}