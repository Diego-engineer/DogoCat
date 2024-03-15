<?php

    class inventario{

        private $Mascota;

        private $insumo;

        private $entrada;

        private $Cantidad;

        private $Salida;

        private $Disponibilidad;


        public function __construct(){

            $this ->Mascota ="";
            $this ->insumo ="";
            $this ->entrada="";
            $this ->Cantidad="";
            $this ->Salida="";
            $this ->Disponibilidad="";
        }


        public function inventario($Mascota, $insumo, $entrada, $Cantidad, $Salida, $Disponibilidad){
            $this-> Mascota = $Mascota;
            $this-> insumo= $insumo;
            $this->entrada= $entrada;
            $this-> Cantidad=$Cantidad;
            $this-> Salida=$Salida; 
            $this-> Disponibilidad =$Disponibilidad;  
        }

        function getMascota(){
            return $this->Mascota;
        }

        function getinsumo(){
            return $this->insumo;
        }

        function getentrada(){
            return $this ->entrada;
        }

        function getCantidad (){
            return $this->Cantidad;
        }
        function getSalida (){
            return $this->Salida;
        }
        function getDisponibilidad (){
            return $this->Disponibilidad;
        }
    }
?>



 