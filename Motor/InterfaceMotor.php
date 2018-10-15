<?php

namespace Montadora\Motor;

interface InterfaceMotor
{
    public function ligar();
    
    public function desligar();
    
    public function acelerar($potencia);
}
