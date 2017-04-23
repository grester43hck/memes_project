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
        foreach($object as $field=>$val){
            if($field=="_id"){
                $this->id = array_values((array)$val);
            }else {
                $this->$field = $val;
            }
        }
        return $this;
    }

    public abstract function getCollection();

}