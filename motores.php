<?php

require_once './Motor/Motor10.php';
require_once './Carro.php';
require_once './Motor/Motor10Turbo.php';
require_once './Motor/Motor20.php';
require_once './Carro16.php';
require_once './Carro16Turbo.php';
require_once './MWM/Motor20.php';
require_once './Motor/Erro.php';
require_once './Fabrica.php';
require_once './Robo.php';

use Montadora\Motor\Motor10;
use Montadora\Motor\Motor10Turbo;
use Montadora\Motor\Motor20;
use MWM\Motor20 as MotorDiesel;

$motor1 = new Motor10();
$motor2 = new Motor10Turbo();
$motor3 = new Motor20();
$motorDiesel = new MotorDiesel();

$carro = new Montadora\Carro16Turbo("Azul", $motorDiesel);

$carro->abastecer(10);
$carro->ligar();

try {
    $carro->acelerar(10);
    echo "linha 1";
    $carro->acelerar(30);
    echo "linha 2";
    $carro->acelerar(100);
    echo "linha 3";
} catch (Montadora\Motor\Erro $e) {
    echo $e->getMessage();
} catch (\Exception $e) {
    echo "Deu ruim";
}


//var_dump($motor1);
var_dump($carro);

//$carro = new Carro();

$carro2 = \Montadora\Fabrica::criar("carro16", "verde");
var_dump($carro2);

$robo = \Montadora\Robo::chamar();
var_dump($robo);