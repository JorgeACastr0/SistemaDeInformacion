<?php
include 'BD/conexion.php';

if (isset($_GET['id'])) {
    $id_docente = intval($_GET['id']);

    $sql = "DELETE FROM Docentes WHERE Id_Docente = ?";
    $stmt = mysqli_prepare($datosConexion, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id_docente);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['success' => true, 'message' => 'Docente eliminado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al eliminar el docente']);
    }

    mysqli_stmt_close($stmt);
} else {
    echo json_encode(['success' => false, 'message' => 'ID de docente no proporcionado']);
}
?>
