<?php
include 'BD/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_docente = intval($_POST['id_docente']);
    $nombre = mysqli_real_escape_string($datosConexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($datosConexion, $_POST['apellido']);
    $email = mysqli_real_escape_string($datosConexion, $_POST['email']);
    $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);
    $emailDocente = $email . '@uniminuto.edu.co';
    $sql = "INSERT INTO Docentes (Id_Docente, Nombre, Apellido, Email, Contraseña) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($datosConexion, $sql);
    mysqli_stmt_bind_param($stmt, 'issss', $id_docente, $nombre, $apellido, $emailDocente, $contraseña);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['success' => true, 'message' => 'Docente agregado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al agregar el docente']);
    }
    mysqli_stmt_close($stmt);
}
?>
