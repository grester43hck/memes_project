<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:46
 */

//MODEL
require_once "model/MongoConector.php";
require_once "model/Model.php";
require_once "model/testModel.php";

//CONTROLLERS
require_once "Controllers/BaseController.php";
require_once "Controllers/ErrorController.php";
require_once "Controllers/UserController.php";

//AUTH
require_once '../google/vendor/autoload.php';
require_once "Authenticate.php";

//AUTH action
$auth = new Authenticate();
/*
$user_id = $auth->auth($_POST["token"], $_POST["type"]);
if($user_id) define("USER_ID", $user_id);
else die("need to re-login");
*/