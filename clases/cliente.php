<?php

    require_once 'persona.php';

    Class Cliente extends Persona {

        public function __construct($nombre, $apellido, $dni, $edad, $email, $telefono){
            parent::__construct($nombre, $apellido, $dni, $edad, $email, $telefono);    
        }

        public function mostrarDatos(){
            echo "Cliente: {$this->nombre} {$this->apellido} <br>";
        }

    }