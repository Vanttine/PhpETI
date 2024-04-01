<?php 

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

// echo $ages[count($ages) - 1];
// echo end($ages);

$agesFiltered = array_filter($ages, function ($age) { 
    return $age >= 18;

});


// var_dump($agesFiltered);

$names = ['Carlos', 'EspecializaTi', 'Company'];

/*
$names[0] = strtoupper($names[0]);
$names[1] = strtoupper($names[1]);
$names[2] = strtoupper($names[2]);

echo '<br>';
echo '<pre>';
var_dump($names);
*/

$names = array_map('applyToupper', $names);
function applyToupper($value)
{
    return strtoupper($value);
}

echo '<br>';
echo '<pre>';
var_dump($names);
