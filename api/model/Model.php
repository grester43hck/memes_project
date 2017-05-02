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
        foreach(get_class_vars(self::class) as $field){
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