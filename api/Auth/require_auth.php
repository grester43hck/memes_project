<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/04/17
 * Time: 15:28
 */

include_once "Authenticate.php";
//AUTH action
$auth = new Authenticate();
$user_id = $auth->auth($_POST["token"], $_POST["type"]);
if($user_id) define("USER_ID", $user_id);
else die("need to re-login");