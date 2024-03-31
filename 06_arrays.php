<?php 

// $cars = array(1, 'Luiz', 12.2);
// var_dump($cars[1]);

// $cars = ['Uno', 'Gol', 'Fusion', 'Civic'];
// var_dump($cars[2]);
/*
$car = [
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2018,
];
$car ['airbag'] = true;
$car ['som'] = 'Model 123';

echo $car['cor'];

$car['cor'] = 'Preto';
echo $car['cor'];
*/

$cars = [
    'Mercedes' => [

        'color' => 'Black',

        'motor' => [

            'vol' => 4.0,
            'cilindros' => 'V8'

        ],

        'name' => 'E63 S AMG'
    ],
    'Ford' => [

        'color' => 'yellow',

        'motor' => [

            'vol' => 3.1,
            'cilindros' => 'V6'

        ],

        'name' => 'Maverick'

    ],
    'Ferrari' => [

        'color' => 'red',

        'motor' => [
            'vol' => 4.3,
            'cilindros' => 'V12'
        ],

        'name' => 'California Spider'

    ],
];

echo $cars['Ford']['motor']['vol'];

$cars['Ford']['motor']['vol'] = 3.2;

echo '<br>';

echo $cars['Ford']['motor']['vol'];
