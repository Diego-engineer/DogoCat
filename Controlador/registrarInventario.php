<?php 
require_once "../Modelo/ConexionBD.php";

class RegistrarInventario {

    public function regInventario(inventario $regInventario) {
        try {
            $conexion = new conexionBD();
            $conexion ->abrir() ;

            $Mascota = $regInventario -> getMascota();
            $insumo = $regInventario -> getinsumo();
            $entrada = $regInventario -> getentrada();
            $Cantidad = $regInventario -> getCantidad();
            $Salida = $regInventario -> getSalida();
            $Disponibilidad = $regInventario -> getDisponibilidad();

            $sql = "INSERT INTO tbl_inventarios VALUES ('', '$Mascota','$insumo','$entrada','$Cantidad','$Salida','$Disponibilidad')";

            $conexion ->consulta($sql);
            $res = $conexion ->obtenerFilasAfectadas();

            if ($res > 0) {
                return "Registro  de Inventario Exitoso!";
            } else {
                return "Error al ingresar el registro";    
            }
        } catch (Exception $ex) {
            return "Error: " .$ex ->getMessage();
        }
    }
}
?>