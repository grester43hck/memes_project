<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 20:03
 */

include_once "header.php";

$controller = (isset($_GET["c"])&&$_GET["c"]!="")?ucfirst($_GET["c"])."Controller":"ErrorController";
$action = (isset($_GET["a"])&&$_GET["a"]!="")?ucfirst($_GET["a"])."Action":"MainAction";
var_dump($_GET);
try {
    $controller::$action();
}catch(Exception $e){
    ErrorController::MainAction();
}