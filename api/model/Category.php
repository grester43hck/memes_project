<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:17
 */
include_once "Model.php";

class Category extends Model
{
    public $name;

    public function getCollection()
    {
        return "categories";
    }

}