<?php 

    require_once "inventario.php";
    require_once "registrarInventario.php";

    if (!empty($_POST["Mascota"])&& !empty($_POST["insumo"])&& !empty($_POST["entrada"])&& !empty($_POST["Cantidad"])&& !empty($_POST["Salida"])&& !empty($_POST["Disponibilidad"])) {

        try {

            $Mascota = $_POST["Mascota"];
            $insumo = $_POST["insumo"];
            $entrada = $_POST["entrada"];
            $Cantidad = $_POST["Cantidad"];
            $Salida = $_POST["Salida"];
            $Disponibilidad = $_POST["Disponibilidad"];
            $inv = new inventario();
            $inv ->inventario($Mascota,$insumo,$entrada,$Cantidad,$Salida,$Disponibilidad);
            $regInventario = new registrarInventario();
            $regInventario ->regInventario($inv);
        } catch (Exception $ex) {
            echo 'Erros'.$ex;
        }
        
    } else {
        echo ("Llenar todos los campos");
    }
?>