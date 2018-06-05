<?php
/**
 * Created by PhpStorm.
 * User: admini
 * Date: 2018/6/5
 * Time: 17:24
 */


require './autoload.php';
$host = [$config['host']];
$client = Elasticsearch\ClientBuilder::create()
    ->setHosts($host)
    ->build();
$index = ['index' => 'test_index_1'];
//$result = $client->indices()->create($index);
//print_r($result);

$client->indices()->delete($index); //