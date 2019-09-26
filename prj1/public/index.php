<?php

require __DIR__.'/../vendor/autoload.php';

echo('Hello world</br>');

$params = ['host'=>'redis', 'port'=>'6379'];
$options = [];
$params = ['tcp://redis?alias=master', 'tcp://slave'];
$options = ['replication'=>true];
$redis = new Predis\Client($params, $options);
$redis->connect();

$redis->set('foo', date('d.m.Y H:i:s'));
print_r($redis->get('foo').'</br>');

die('</BR>End.');