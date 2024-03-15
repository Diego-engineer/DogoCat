<?php


    class Veterinario{

        private $Profesional;

        private $mascota;

        private $Estado;

        private $Enfermedades;

        private $Evoluciones;

        private $Vacunas;

        private $Especialidad;



        public function __construct(){

            $this ->Profesional = "";
            $this ->mascota = "";
            $this ->Estado = "";
            $this ->Enfermedades = "";
            $this ->Evoluciones = "";
            $this ->Vacunas = "";
            $this ->Especialidad = "";

        }


        public function Veterinario($Profesional, $mascota, $Estado, $Enfermedades, $Evoluciones, $Vacunas, $Especialidad) {
            $this -> Profesional = $Profesional;
            $this -> mascota = $mascota;
            $this -> Estado = $Estado;
            $this -> Enfermedades = $Enfermedades;
            $this -> Evoluciones = $Evoluciones;
            $this -> Vacunas = $Vacunas;
            $this -> Especialidad = $Especialidad;
        }

        function getProfesional(){
            return $this ->Profesional;
        }

        function getmascota(){
            return $this ->mascota;
        }

        function getEstado(){
            return $this ->Estado;
        }

        function getEnfermedades (){
            return $this ->Enfermedades;
        }

        function getEvoluciones(){
            return $this ->Evoluciones;
        }

        function getVacunas (){
            return $this ->Vacunas;
        }

        function getEspecialidad (){
            return $this -> Especialidad;
        }
    }

?>