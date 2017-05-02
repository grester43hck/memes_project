<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:46
 */

//CONFIG
include_once "config/config.php";

//MODEL
require_once "model/MongoConector.php";
require_once "model/Model.php";
require_once "model/Post.php";
require_once "model/User.php";

//CONTROLLERS
require_once "Controllers/BaseController.php";
require_once "Controllers/ErrorController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/PostController.php";

//GOOGLE
require_once '../google/vendor/autoload.php';

//AUTH
require_once "Auth/Authenticate.php";


