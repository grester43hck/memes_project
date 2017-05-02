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
        parent::printJSON($res);
    }

    public static function createAction(){
        var_dump($_REQUEST);
        //$auth = new Authenticate();
        //$auth->auth($_R)

        $post = (new Post)->parse($_POST);
        $post->date = date("d/m/Y H:i:s");
        $post->upvotes =0;
        $post->downvotes =0;
        $post->user_id = USER;

        $con = new MongoConector();
        $con->create($post);

        parent::printJSON(array("success"=>true));
    }

}