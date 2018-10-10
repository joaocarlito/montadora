<?php

/**
 * Classe base para carros
 * @author João / Edir Elaborata
 */
class Carro {

    public $cor;
    private $peso = 1000;
    private $combustivel = "gasolina";
    private $quantCombustivel = 0;
    private $velocidade = 0;
    private $kilometragem = 0;
    private $potencia = 1.0;
    private $ligado = false;
    private $direcao = "centro";

    /**
     * Construtor do carro(classe)
     * @param string $cor
     */
    public function __construct($cor = "Branco") {

        $this->cor = $cor;
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


        $this->velocidade = $valor * $this->potencia;
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

            $quant = $this->potencia * $this->peso * $this->velocidade;
            $this->quantCombustivel -= $quant / 6000;
        } else {
            $this->desligar();
        }
    }

}
