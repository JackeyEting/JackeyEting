<?php

$redis = new Redis();
$redis->connect('127.0.0.1',6379,1);//意思超过一秒则不连接
/*$redis->hset('key1','arr2','storage2');
echo $redis->hget('key1','arr2');*/
//print_r($redis->hgetall('key1'));//redis的hash是以数组的形式来储存值得
/*$arr = array('111','name'=>'Jackey');
$redis->hmset('key1',$arr);*/
$getArr = array('arr','arr2','name');
print_r($redis->hmget('key1',$getArr));
$redis->close();
