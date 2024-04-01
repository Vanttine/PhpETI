<?php 

echo '<pre>';
$cart = ['Arroz', 'Sabao', 'Feijao', 'Balinhas'];
var_dump($cart);

echo '<br>';
echo '<pre>';
array_pop($cart);
var_dump($cart);

echo '<br>';
echo '<pre>';
array_shift($cart);
var_dump($cart);

echo '<br>';
echo '<pre>';
unset($cart[0]);
var_dump($cart);

echo '<br>';
echo '<pre>';
array_push($cart,'Tapete');
array_push($cart,'Rodo');
var_dump($cart);

echo '<br>';
echo '<pre>';
array_unshift($cart,'Microondas');
var_dump($cart);

echo '<br>';
echo '<pre>';
array_unshift($cart,'Tapete');
var_dump($cart);

echo '<br>';
echo '<pre>';
$cart = array_unique($cart);
var_dump($cart);