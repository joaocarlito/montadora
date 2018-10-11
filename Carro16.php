<?php

require_once './Carro.php';

class Carro16 extends Carro {

    const POTENCIA = 1.6;
    const PESO = 1050;

    protected $valvulas = 16;

    public function verCor() {

        $this->cor;
    }

    public function ligar() {

        parent::ligar();

        $this->quantCombustivel -= 1;
    }

    public function teste() {

        echo self::PESO . "\n";
        echo self::POTENCIA . "\n";

        echo parent::PESO . "\n";
        echo parent::POTENCIA . "\n";
    }

    /**
     * Sobrecarga de get
     * @param type $nome
     */
    public function __get($nome) {
        
        echo "Tentou acessar o atributo: $nome \n";
        echo "O valor de $nome é: " . $this->$nome;
    }
    
    /**
     * Sobrecarga de set
     * @param type $name
     * @param type $value
     */
    public function __set($name, $value) {
        
        echo "Setando o valor: $value para o atributo $name";
        $this->$name = $value;
    }
    
    /**
     * Sobrecarga de metodo
     * @param type $name
     * @param type $arguments
     */
    public function __call($name, $arguments) {
        
        echo "tentando executar a função: $name com os valores: $arguments";
    }

    public function __toString() {
        
        return;
    }
}
