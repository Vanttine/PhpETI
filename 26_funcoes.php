<?php 


/*
$state = 'Sao Paulo/SP';
$arrayState = explode('/', $state);
var_dump($arrayState[0]);
*/

echo '<pre>';
$info = 'Sao Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo);

echo '<hr>';

$arrayTest = [1, 2, 3, 4, 5];
//echo implode('#', $arrayInfo);
echo implode(' - ', $arrayTest);
