<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:17
 */
include_once "Model.php";

class testModel extends Model
{
    public $test;

    public function getCollection()
    {
        return "test";
    }


}