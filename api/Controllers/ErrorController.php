<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/04/17
 * Time: 10:59
 */
include_once "BaseController.php";

class ErrorController extends BaseController
{
    public static function MainAction()
    {
        die(json_encode(array("status"=>"error", "msg"=>"Invalid Controller or Action")));
    }

}