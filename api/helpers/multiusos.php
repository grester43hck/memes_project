<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 18:57
 */

include "../model/MongoConector.php";

$client = new MongoConector();
$res = $client->find(new testModel());
