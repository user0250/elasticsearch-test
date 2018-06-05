<?php

require '../vendor/autoload.php';


$client = Elasticsearch\ClientBuilder::create()
    ->setHosts(['http://php:9200'])
    ->build();
try{
    print_r($client->info());
}catch (\Exception $exception){

}
