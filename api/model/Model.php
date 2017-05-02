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
        foreach(get_class_vars(get_class($this)) as $field=>$val){
            if($field=="id"){
                var_dump($object["_id"]);
                $this->id = $object["_id"]->{'oid'};
            }else {
                $this->$field = $object[$field];
            }
        }
        return $this;
    }

    public abstract function getCollection();

}