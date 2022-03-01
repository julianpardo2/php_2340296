<?php

class Pedido {
    public $cliente;
    public $fecha;
    public $formaPago;
    public $total;
    public $productos;

    public function __construct($cliente, $fecha) {
        $this->cliente = $cliente;
        $this->fecha = $fecha;
        $this->formaPago = "ND";
        $this->total = 0;
        $this->productos = array();
    }

}