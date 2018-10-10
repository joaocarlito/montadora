<?php

require_once './Carro.php';

$carro1 = new Carro("Branco");
$carro2 = new Carro();
$carro3 = new Carro();

$carro1->abastecer(10);
$carro1->ligar();
$carro1->abastecer(20);
$carro1->acelerar(80);
$carro1->acelerar(20);
$carro1->acelerar(70);
$carro1->acelerar(80);

$carro1->acelerar(80);



//$carro2->cor = "Vermelho";
var_dump($carro1);
var_dump($carro2);
