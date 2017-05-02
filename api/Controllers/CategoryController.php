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
    }

    public static function GetCategoriesAction(){

        $con = new MongoConector();
        parent::printJSON($con->find((new Category())));

    }

}