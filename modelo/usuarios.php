<?php
    class Usuario{
        public $nombre;
        public $apellido;
        public $edad;

        function __construct($nombre, $apellido, $edad){
            $this->edad = $edad;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        
        public function imprimir(){
            return "Saludando ah $this->nombre";
        }
    }
?>