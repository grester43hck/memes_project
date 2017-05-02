<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/04/17
 * Time: 10:59
 */
include_once "BaseController.php";

class PostController extends BaseController
{
    public static function MainAction()
    {
        $con = new MongoConector();
        $res = $con->find((new Post));
        echo json_encode($res);
    }

}