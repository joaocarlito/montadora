<?php

namespace Montadora;

/**
 * Description of Fabrica
 *
 * @author aluno
 */
class Fabrica {

    static public function criar($modelo, $cor) {

        if ($modelo == "carro16") {

            $motor = new Motor\Motor10();
            $carro = new Carro16($cor, $motor);
        } elseif ($modelo == "carro16turbo") {

            $motor = New Motor\Motor10Turbo();
            $carro = new Carro16Turbo($cor, $motor);
        } else {
            throw new Exception("Modelo não existe");
        }
        
        return $carro;
    }

}
