<?php 

$domain = 'https://www.especializati.com.br';

// echo str_replace('www.', 'https://www.', $domain);
// echo substr($domain, 0, 4);
// echo substr($domain, -7);

$protocol = substr($domain, 0, 8);
if ($protocol == 'https://')
    echo 'Seguro!';
else 
    echo 'Perigoso!';


// var_dump(substr($domain, 12, -7));

echo strlen($domain);