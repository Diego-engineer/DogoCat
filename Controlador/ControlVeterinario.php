<?php 

    require_once "veterinario.php";
    require_once "registrarVeterinario.php";

    if (isset($_POST["Profesional"]) && isset($_POST["mascota"]) && isset($_POST["Estado"]) && isset($_POST["Enfermedades"]) && isset($_POST["Evoluciones"]) && isset($_POST["Vacunas"]) && isset($_POST["Especialidad"])) {
        try {
            $Profesional = $_POST["Profesional"];
            $mascota = $_POST["mascota"];
            $Estado = $_POST["Estado"];
            $Enfermedades = $_POST["Enfermedades"];
            $Evoluciones = $_POST["Evoluciones"];
            $Vacunas = $_POST["Vacunas"];
            $Especialidad = $_POST["Especialidad"];
            
            // Create a new instance of Veterinario (assuming Veterinario class has a constructor)
            $ayudante = new Veterinario();
            $ayudante -> Veterinario ($Profesional, $mascota, $Estado, $Enfermedades, $Evoluciones, $Vacunas, $Especialidad);
            // Create a new instance of RegistrarVeterinario and register the veterinarian
            $regVete = new RegistrarVeterinario();
            $regVete->regVeterinario($ayudante);
            
            echo "Veterinario registrado exitosamente!";
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
        }
    } else {
        echo "Llenar todos los campos";
    }
    

?>