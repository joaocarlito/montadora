<?php

namespace Montadora;

/**
 * Garante que só exista um objeto - Singleton
 *
 * @author aluno
 */
class Robo {

    static private $armazenado = null;

    static public function chamar() {

        if(self::$armazenado != null) {
            return $this->armazenado;
        } else {
            self::$armazenado = new self();
            return self::$armazenado;
        }
    }

}
