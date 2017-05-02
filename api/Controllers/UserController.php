<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/04/17
 * Time: 10:59
 */
include_once "BaseController.php";

class UserController extends BaseController
{
    public static function MainAction()
    {
        echo "MAIN ACTION OF USER CONTROLLER";
    }

    public static function LoginAction(){
        var_dump(file_contents("php://input"));die();
        if(!isset($_POST["token"])||!isset($_POST["type"])) {
            parent::printJSON(array("error"=>"missing params"));
        }


        $token = $_POST["token"];
        $type = $_POST["type"];

        $auth = new Authenticate();
        $res = $auth->auth($token, $type);
        parent::printJSON(array("success"=>($res)?true:false));
    }

}