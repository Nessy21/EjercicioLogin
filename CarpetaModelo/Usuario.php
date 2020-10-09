<?php
        
    class Usuario {
        //atributos 
        private $nombre;
        private $apellidos;
        private $login;
        private $password;

        //getters y setters
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function setApellidos($apellidos){
            $this->apellidos=$apellidos;
        }
        public function getLogin(){
            return $this->login;
        }
        public function setLogin($login){
            $this->login=$login;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password=$password;
        }

        //constructor

        public function __construct($nombre, $apellidos, $login, $password){
            $this->nombre=$nombre;
            $this->apellidos=$apellidos;
            $this->login=$login;
            $this->password=$password;
        }
    }    
?>