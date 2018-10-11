<pre>
<?php

require_once './Carro.php';
require_once './Carro16.php';

$carro1 = new Carro16("Branco");
$carro2 = new Carro();
$carro3 = new Carro16();

$carro1->abastecer(10);
$carro1->ligar();
$carro1->abastecer(20);
$carro1->acelerar(80);
$carro1->acelerar(20);
$carro1->acelerar(70);
$carro1->acelerar(80);

$carro1->freiar(80);


// acessando algo estatico (algo não instanciado)
//echo Carro::$chassi;
//echo $carro1::$chassi . "\n";
//echo $carro2::$chassi . "\n";
//echo Carro16::POTENCIA;
    
    //echo $carro1->valvulas();
    //echo $carro3->valvulas();
    //echo $carro3->valvulas() = 12;

    echo $carro3;
    echo $carro2;


//$carro2->cor = "Vermelho";
var_dump($carro1);
var_dump($carro2);
var_dump($carro3);
