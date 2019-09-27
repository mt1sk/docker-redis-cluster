<?php

require __DIR__.'/../vendor/autoload.php';

echo('Hello world</br>');

$params = ['sentinel:26379'];
$options = ['replication'=>'sentinel', 'service'=>'my_cluster'];
$redis = new Predis\Client($params, $options);
$redis->connect();

$redis->set('foo', date('d.m.Y H:i:s'));
print_r($redis->get('foo').'</br>');

$current = $redis->getConnection()->getCurrent()->getParameters();
$master = $redis->getConnection()->getMaster()->getParameters();
echo('Current: '.$master->host."<BR>");
echo('Master: '.$master->host."<BR>");

die('</BR>End.');