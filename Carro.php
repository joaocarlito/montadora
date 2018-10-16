<?php

namespace Montadora;

use \Montadora\Motor\InterfaceMotor;

require_once './Motor/InterfaceMotor.php';

/**
 * Classe base para carros
 * @author Edir
 * 
 */
abstract class Carro
{
    
    //constante - estatico
    const POTENCIA = 1.0;
    const PESO = 1000;
    
    public $cor;
    private $combustivel = "gasolina";
    protected $quantCombustivel = 0;
    private $velocidade = 0;
    private $kilometragem = 0;

    private $direcao = "centro";
    private $chassi = "XYZ00123";
    protected $valvulas = 8;
    private $motor;

    /**
     * Construtor do carro
     * @param string $cor
     */
    public function __construct($cor = "Branco", InterfaceMotor $motor) 
    {
        $this->cor = $cor;
        $this->chassi = uniqid();
        $this->motor = $motor;               
    }


    /**
     * Liga o carro
     */
    public function ligar()
    {
        if ($this->quantCombustivel > 0)
        {
            $this->motor->ligar();
        }
    }
    
    /**
     * Desliga o carro
     */
    public function desligar()
    {
        $this->motor->desligar();
    }
    
    /**
     * Freia o carro
     */
    public function freiar()
    {
        $this->acelerar(0);
    }
    
    /**
     * Acelera o motor
     */
    public function acelerar($valor)
    {
       
        $this->velocidade = $valor * self::POTENCIA;
        $this->alimentarCombustivel();
        $this->kilometragem += $this->velocidade;
       
    }
    
    /**
     * abastece com combustivel
     * @param float $quant Quantidade em litros
     */
    public function abastecer($quant)
    {
        $this->quantCombustivel += $quant;
    }
    
    /**
     * gira as rodas
     * @param string $direcao Valores permitido: centro | direita | esquerda
     */
    public function virar($direcao)
    {
        $this->direcao = $direcao;
    }
    
    /**
     * bomba de combustivel
     */
    private function alimentarCombustivel()
    {
       
        
        if ($this->quantCombustivel > 0)
        {
             if($this->quantCombustivel < 5)
        {
            throw new Motor\Erro("Na Reserva");
        }
            
            $quant = static::POTENCIA * static::PESO * $this->velocidade ;
        
            $this->quantCombustivel -= $quant / 6000;
        } else {
            $this->desligar();
            throw new \Exception("Motor Desligado");
        }
        
        
      
    }
    
    /**
     * metodo estatico
     */
    static public function obterPotencia()
    {
        return static::POTENCIA;
    }
    
    public function valvulas()
    {
        return $this->valvulas;
    }
    
    public function __toString() 
    {
        return static::POTENCIA . " - " .static::PESO;
    }
}
