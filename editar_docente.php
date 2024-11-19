<?php
include 'BD/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_docente = intval($_POST['id_docente']);
    $nombre = mysqli_real_escape_string($datosConexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($datosConexion, $_POST['apellido']);
    $email = mysqli_real_escape_string($datosConexion, $_POST['email']);
    $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);

    $sql = "UPDATE Docentes SET Nombre = ?, Apellido = ?, Email = ?, Contraseña = ? WHERE Id_Docente = ?";
    $stmt = mysqli_prepare($datosConexion, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssi', $nombre, $apellido, $email, $contraseña, $id_docente);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['success' => true, 'message' => 'Docente actualizado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al actualizar el docente']);
    }

    mysqli_stmt_close($stmt);
}
?>
