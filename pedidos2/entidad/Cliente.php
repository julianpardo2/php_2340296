<?php

class Cliente {
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($n, $a) {
        $this->nombre = $n;
        $this->apellido = $a;
        $this->edad = 14;
    }

}

?>