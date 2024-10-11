<?php
include 'BD/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $sql = "SELECT * FROM Docentes WHERE Id_Docente = ?";
    $stmt = mysqli_prepare($datosConexion, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    } else {
        echo json_encode(["error" => "Docente no encontrado"]);
    }
}


/*Casos en los que SÍ necesitas backend:
Si los cambios en el formulario deben guardarse en la base de datos:
     Cuando el usuario edita los datos en el formulario, necesitas 
     enviar estos cambios al servidor para actualizar los datos en
      la base de datos. En este caso, el backend es fundamental.

Aquí es donde usarías PHP o cualquier otro lenguaje del lado del
 servidor para recibir los datos del formulario, procesarlos y realizar
  la actualización en la base de datos.

¿Qué parte del backend es necesaria si decides usarlo?
Recepción de datos del formulario: Cuando el usuario envía el 
formulario con los datos editados, necesitas capturar estos datos en el backend.
Actualización en la base de datos: Ejecutar una consulta UPDATE 
en la base de datos para cambiar la información del docente. */