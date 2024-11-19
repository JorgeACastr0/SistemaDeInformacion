<?php
include 'BD/conexion.php';

$id_docente = intval($_GET['id']);
$sql = "SELECT * FROM Docentes WHERE Id_Docente = ?";
$stmt = mysqli_prepare($datosConexion, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id_docente);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    echo json_encode(['success' => true, 'docente' => $row]);
} else {
    echo json_encode(['success' => false, 'message' => 'Docente no encontrado']);
}

mysqli_stmt_close($stmt);
?>
