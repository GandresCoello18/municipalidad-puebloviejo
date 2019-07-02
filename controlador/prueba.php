<?php
    class Pruebas{
        public function saludar(){
            require("modelo/usuarios.php");
            $obj = new Usuario("Andres", "Coello", 19);
            $obtener = $obj->imprimir();
            require("vista/usuario_vista.php");
        }
    }
?>