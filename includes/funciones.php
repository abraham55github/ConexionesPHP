<?php



function obtener_servicios() {
    try {
        //importar las credenciales
        require 'database.php';

        // Consulta SQL
        $sql = "SELECT * FROM actor;";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        //Acceder a los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_array($consulta));
        echo "</pre>";

        //Cerrar la conexion

    } catch (\Throwable $th) {
        var_dump($th);
    }
}