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
$result = $client->indices()->create($index);


try{

}catch (\Exception $e){
    print_r($e->getMessage());
}




//$client->indices()->delete($index); //