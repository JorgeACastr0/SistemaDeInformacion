<?php
include 'BD/conexion.php';

$VerDocentesSQL = "SELECT * FROM Docentes";
$queryDocentes = mysqli_query($datosConexion, $VerDocentesSQL);

if ($queryDocentes) {
    while ($row = mysqli_fetch_array($queryDocentes)) {
        echo "<tr>
            <td>{$row['Id_Docente']}</td>
            <td>{$row['Nombre']}</td>
            <td>{$row['Apellido']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Contraseña']}</td>
            <td>
                <form method='POST' class='text-center'>
                    <input type='hidden' name='id' value='{$row['Id_Docente']}'>
                    <button type='submit' name='editar'>Editar</button>
                </form>
            </td>
            <td>
                <form method='POST' class='text-center'>
                    <input type='hidden' name='id' value='{$row['Id_Docente']}'>
                    <button type='submit' name='delete'>Eliminar</button>
                </form>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>Error en la consulta: " . mysqli_error($datosConexion) . "</td></tr>";
}
?>
