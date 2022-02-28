<?php

class Producto {
    public $nombre;
    public $precio;
    public $descripcion;
    public $foto;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = "N/D";
        $this->foto = "https://cdn-icons-png.flaticon.com/512/1170/1170679.png";
    }

}