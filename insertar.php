<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $_POST['nombre_completo'];
    $direccion = $_POST['direccion'];
    $observacion = $_POST['observacion'];

    // Verifica que los campos no estén vacíos
    if (!empty($nombre_completo) && !empty($direccion) && !empty($observacion)) {
        $sql = "INSERT INTO tabla (nombre_completo, direccion, observacion) VALUES (?, ?, ?)";
        
        // Preparar la declaración SQL
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "sss", $nombre_completo, $direccion, $observacion);

            // Ejecutar la declaración
            if (mysqli_stmt_execute($stmt)) {
                echo "Datos insertados correctamente";
            } else {
                echo "Error al insertar los datos: " . mysqli_error($conn);
            }

            // Cerrar la declaración
            mysqli_stmt_close($stmt);
        } else {
            echo "Error al preparar la declaración: " . mysqli_error($conn);
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

// Cerrar la conexión
mysqli_close($conn);
?>
