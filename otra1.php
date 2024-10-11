<?php
include 'BD/conexion.php';

/* Apartado sql Docentes tener en cuenta Metodo POST */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="CSS/nuevo.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/StylePanel.css">
    <!--ICONOS -->
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Panel Administrador</title>
</head>

<body>
    <!-- Aquí va el código del menú y del contenido... -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- Tabla de docentes -->
        <div id="docentesContent" style="display: block;">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-dark styled-table">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
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
                                        <form method='POST' action='AdminPanel.php'>
                                            <input type='hidden' name='id_docente' value='{$row['Id_Docente']}'>
                                            <button type='submit' name='editar' class='btn btn-warning'>Editar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method='POST' class='text-center'>
                                            <input type='hidden' name='id' value='{$row['Id_Docente']}'>
                                            <button type='submit' name='delete' class='btn btn-danger'>Eliminar</button>
                                        </form>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($datosConexion) . "</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Mostrar el formulario de edición si se hace clic en "Editar" -->
            <?php
            if (isset($_POST['editar'])) {
                $id_docente = intval($_POST['id_docente']);  // Convertir el ID a entero para mayor seguridad
                $sql = "SELECT * FROM Docentes WHERE Id_Docente = ?";
                $stmt = mysqli_prepare($datosConexion, $sql);
                mysqli_stmt_bind_param($stmt, 'i', $id_docente);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_array($result)) {
                    // Formulario de edición
                    echo "<div id='editarFormulario'>
                        <h2>Editar Usuario</h2>
                        <form action='AdminPanel.php' method='POST'>
                            <input type='hidden' name='id_docente' value='{$row['Id_Docente']}' required>
                            <div class='mb-3'>
                                <label for='nombre' class='form-label'>Nombre</label>
                                <input type='text' name='Nombre' value='{$row['Nombre']}' required class='form-control' id='nombre'>
                            </div>
                            <div class='mb-3'>
                                <label for='apellido' class='form-label'>Apellido</label>
                                <input type='text' name='Apellido' value='{$row['Apellido']}' required class='form-control' id='apellido'>
                            </div>
                            <div class='mb-3'>
                                <label for='email' class='form-label'>Email</label>
                                <input type='text' name='Email' value='{$row['Email']}' required class='form-control' id='email'>
                            </div>
                            <div class='mb-3'>
                                <label for='contraseña' class='form-label'>Contraseña</label>
                                <input type='text' name='contraseña' value='{$row['Contraseña']}' required class='form-control' id='contraseña'>
                            </div>
                            <input type='submit' name='update' value='Actualizar' class='btn btn-primary'>
                        </form>
                    </div>";
                } else {
                    echo "<p>No se encontró el docente.</p>";
                }
            }

            // Lógica de actualización
            if (isset($_POST['update'])) {
                $id_docente = $_POST['id_docente'];
                $nombre = mysqli_real_escape_string($datosConexion, $_POST['Nombre']);
                $apellido = mysqli_real_escape_string($datosConexion, $_POST['Apellido']);
                $email = mysqli_real_escape_string($datosConexion, $_POST['Email']);
                $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);

                $sqlUpdateDocente = "UPDATE Docentes SET Nombre='$nombre', Apellido='$apellido', Email='$email', Contraseña='$contraseña' WHERE Id_Docente='$id_docente'";

                if (mysqli_query($datosConexion, $sqlUpdateDocente)) {
                    echo "<p>Datos actualizados correctamente.</p>";
                    echo "<meta http-equiv='refresh' content='0'>";  // Refresca la página para ver los cambios
                } else {
                    echo "<p>Error al actualizar: " . mysqli_error($datosConexion) . "</p>";
                }
            }
            ?>
        </div>
    </main>

    <!-- Scripts -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="Js-Proyecto/interaccion.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
