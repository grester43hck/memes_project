<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 18:45
 */
class MongoConector
{

    private $conexion;
    /**
     * MongoClient constructor.
     */
    public function __construct()
    {

        $this->conexion = new MongoDB\Driver\Manager("mongodb://memes_project:mdBkYreQQIZnRdTg@cluster0-shard-00-00-uogfd.mongodb.net:27017,cluster0-shard-00-01-uogfd.mongodb.net:27017,cluster0-shard-00-02-uogfd.mongodb.net:27017/memes_project?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin");

    }

    public function update($query, $model, $upsert=false){
        $bulk = new \MongoDB\Driver\BulkWrite;
        $model->id = new MongoDB\BSON\ObjectId($model->id);
        $bulk->update($query, array('$set'=>$model), array("upsert"=>$upsert));
        $this->conexion->executeBulkWrite('memes_project.'.$model->getCollection(), $bulk);
    }

    public function find($model, $query=array(), $options=array()){

        $query = new \MongoDB\Driver\Query($query, $options);
        $rows   = $this->conexion->executeQuery('memes_project.'.$model->getCollection(), $query);

        $res = array();
        foreach($rows as $r) {
            var_dump($r);
            array_push($res, (new $model)->parse($r));
        }
        return $res;
    }

}