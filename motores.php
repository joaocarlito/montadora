<?php

require_once './Motor/Motor10.php';
require_once './Carro.php';
require_once './Motor/Motor10Turbo.php';
require_once './Motor/Motor20.php';
require_once './Carro16.php';
require_once './Carro16Turbo.php';
require_once './MWM/Motor20.php';

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

//var_dump($motor1);
var_dump($carro);

//$carro = new Carro();