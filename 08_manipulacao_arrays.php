<?php 

$infoCompany = [
    'name'          => 'EspecializTi',
    'founder'       => 'Carlos Ferreira',
    'year_current'  => 2024,
];

$infoCompanyTwo = [
    'courses'=> [
        'PHP', 'JS', 'Vue JS', 'Laravel'
    ],
    'total_courses' => 26,
];

// var_dump(array_keys($infoCompany));

// var_dump(array_values($infoCompany));

// var_dump(count($infoCompany));

$infoCompany = array_merge($infoCompany, $infoCompanyTwo);


echo '<pre>';
var_dump($infoCompany);
