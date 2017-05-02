<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:17
 */
include_once "Model.php";

class User extends Model
{
    public $name;
    public $img;
    public $oauth_id;
    public $email;
    public $date_last;

    public function getCollection()
    {
        return "users";
    }

}