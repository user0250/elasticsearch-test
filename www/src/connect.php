<?php
/**
 * Created by PhpStorm.
 * User: yulo
 * Date: 18-6-4
 * Time: 下午9:54
 */

require './autoload.php';


$host = [$config['host']];
//$client = \Elasticsearch\ClientBuilder::create()
//    ->setHosts($host)
//    ->build();
//print_r($client->ping());  //  1
//
//
//$client = \Elasticsearch\ClientBuilder::create()
//    ->setHosts($host)
//    ->setRetries(0)
//    ->build();



$logger = Elasticsearch\ClientBuilder::defaultLogger('../logs/es.log',\Monolog\Logger::INFO);
$client = \Elasticsearch\ClientBuilder::create()
    ->setHosts($host)
    ->setLogger($logger)
    ->build();

echo $client->ping();

