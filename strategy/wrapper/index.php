<?php

require_once __DIR__.'/../../bootstrap.php';
load_page('strategy');

use DataWrapper\Output\ArrayOutput;
use DataWrapper\Output\JsonOutput;
use DataWrapper\Output\SerializeOutput;
use DataWrapper\Wrapper;
use Mine\HtmlOutput;

## load data
$data = load_data();

## create new object
$client = new Wrapper();
$client->setData($data);

## array
$client->setOutput(new ArrayOutput());
$client->printName();
$result = $client->getOutput();
print_r($result);

## json
$client->setOutput(new JsonOutput());
$client->printName();
$result = $client->getOutput();
var_dump($result);

## serialize
$client->setOutput(new SerializeOutput());
$client->printName();
$result = $client->getOutput();
var_dump($result);

## ---------- my strategy ----------
## html
$headers = [
    'id' => 'ID',
    'name' => 'NAME',
    'age' => 'AGE',
];
$client->setOutput(new HtmlOutput($headers));
$client->printName();
$result = $client->getOutput();
echo $result;
