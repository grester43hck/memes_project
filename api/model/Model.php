<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 19:11
 */
abstract class Model
{

    public $id;

    /**
     * Model constructor.
     */
    public function parse($object)
    {

        $object = (array)$object;
        foreach(get_object_vars($this) as $field){
            var_dump($field);
            if($field=="id"){
                $this->id = $object["_id"]->{'$id'};
            }else {
                $this->$field = $object[$field];
            }
        }
        return $this;
    }

    public abstract function getCollection();

}