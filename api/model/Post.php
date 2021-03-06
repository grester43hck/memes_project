<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:17
 */
include_once "Model.php";

class Post extends Model
{
    public $text;
    public $user_id;
    public $date;
    public $file;
    public $category_id;
    public $upvotes;
    public $nsfw;
    public $downvotes;

    public function getCollection()
    {
        return "posts";
    }

    public function getFixedFields()
    {
        return array(
            "user_id",
            "date",
            "file",
            "upvotes",
            "downvotes"
        );
    }


}