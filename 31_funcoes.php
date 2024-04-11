<?php 




// echo md5($password);
// echo sha1($password);
// echo crypt($password, $salt);

// $passCr = base64_encode($password);
// echo $passCr;
// echo base64_encode($passCr);

// echo hash('sha512', $password);

/*
$password = '123456';

echo cryptC($password);

function cryptC(String $value): String
{
    
    $hash = hash('sh512', sha1(md5(crypt($value, 'sdjJ@$jsdjaslJKjNnmsfc21@#$erd'))));

    return $hash;
}
*/

$password = '123456';

function cryptC(string $value): string
{
    // Gera um salt aleatório para o crypt
    $salt = '$2a$10$' . bin2hex(random_bytes(22));

    // Cria o hash utilizando o algoritmo bcrypt
    $hash = crypt($value, $salt);

    return $hash;
}

echo cryptC($password);