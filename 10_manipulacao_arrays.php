<?php 

echo '<br>';
echo '<pre>';

$cart = [
    0 => 'Macarrao', 
    1 => 'Fejao', 
    2 => 'Arroz', 
    3 => 'Batata'
];

var_dump( $cart );


echo '<br>';
echo 'arsort($variavel) ordena de Z-A';
echo '<pre>';
arsort($cart) ;
var_dump( $cart );


echo '<br>';
echo 'asort($variavel) ordena de A-Z';
echo '<pre>';
asort( $cart ) ;
var_dump( $cart );


echo '<br>';
echo 'sort($variavel) ordena A-Z e tambem as keys do array';
echo '<pre>';
sort( $cart ) ;
var_dump( $cart );