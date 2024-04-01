<?php 

// $nomes = array('Luiz', 'EspecializaTi', 'Company');

// $nomes = ['Luiz', 'EspecializaTi', 'Company'];

$name = 'Carlos';

$company = 'EspecializTi';

$year = 2024;


$infoCompany = [
    $name,
    $company, 
    $year
];


// $infoCompany = compact('name', 'company', 'year');
// var_dump( $infoCompany );

// var_dump(is_array($infoCompany));

var_dump(in_array('Carlos', $infoCompany));