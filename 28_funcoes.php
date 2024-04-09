<?php 

$name = 'Luiz';


if (isset($name))
    echo $name;
else
    echo 'Variavel nao existe!';




unset($name);

$name = 'Fellipe';
    
if (isset($name))
    echo $name;
else
    echo 'Variavel nao existe!';
