<?php

/**
 * Classe base para carros
 * @author João / Edir Elaborata
 */
class Carro {

    // constante - estatico 
    const POTENCIA = 1.0;
    const PESO = 1000;

    public $cor;
    private $combustivel = "gasolina";
    protected $quantCombustivel = 0;
    private $velocidade = 0;
    private $kilometragem = 0;
    private $ligado = false;
    private $direcao = "centro";
    private $chassi = "XYZ00123";
    protected $valvulas = 8;

    /**
     * Construtor do carro(classe)
     * @param string $cor
     */
    public function __construct($cor = "Branco") {

        $this->cor = $cor;
        $this->chassi = uniqid(); // self é um this para atributos estaticos
    }

    /**
     * Liga o carro
     */
    public function ligar() {

        if ($this->quantCombustivel > 0) {
            $this->ligado = TRUE;
        }
    }

    /**
     * Desliga o carro
     */
    public function desligar() {

        $this->ligado = FALSE;
    }

    /**
     * Freia o carro
     */
    public function freiar() {

        $this->acelerar(0);
    }

    /**
     * Acelera o carro
     * @param float $valor Faz o carro andar e consequentemente gastar combustível.
     */
    public function acelerar($valor) {


        $this->velocidade = $valor * self::POTENCIA;
        $this->alimentarCombustivel();
        $this->kilometragem += $this->velocidade;
    }

    /**
     * Abastece com combustivel
     * @param float $quant - Quantidade em litros
     */
    public function abastecer($quant) {

        $this->quantCombustivel += $quant;
    }

    /**
     * Gira as rodas
     * @param string $direcao - Valores permitidos: centro | direita | esquerda
     */
    public function virar($direcao) {

        $this->direcao = $direcao;
    }

    /**
     * Bomba de combustível
     */
    private function alimentarCombustivel() {

        if ($this->quantCombustivel > 0) {

            $quant = static::POTENCIA * static:: PESO * $this->velocidade;
            $this->quantCombustivel -= $quant / 6000;
        } else {
            $this->desligar();
        }
    }

    /**
     * Metodo estatico
     */
    static public function obterPotencia() {

        return self::POTENCIA;
    }

    /**
     * 
     */
    public function valvulas() {

        return $this->valvulas;
    }
    
    public function __toString() {
        
        return static::POTENCIA . " - " . static::PESO;
    }

}
