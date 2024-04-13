<?php 

$a = 2;
$b = 2;


$result = $a + $b;
echo "O resultado da soma entre $a + $b = $result <br>";


$result = $b - $a;
echo "O resultado da subtracao entre $b - $a = $result <br>";


$result = $b * $a;
echo "O resultado da multiplicacao entre $b x $a = $result <br>";

$result = $b / $a;
echo "O resultado da divisao entre $b / $a = $result <br>";

$result = $b % $a;
echo "O resto da divisao entre $b % $a = $result <br>";


if ($a % 2 == 0) 
    
    echo 'E par';

else

    echo 'E impar';

echo '<br>';

$result = (2 + (2 - 8) / 4) * 2;

echo $result;