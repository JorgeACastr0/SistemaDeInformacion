<?php
include 'BD/conexion.php';

/*Apartado sql Docentes tener en cuenta Metodo POST */

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
    <!-- Barra de navegación -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MinuTech</a>
        <!--Boton barra navagacion-->
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--aqui puse barra de busqueda-->
        <input class="form-control form-control-dark w-100" type="text" placeholder="Busqueda" aria-label="Busqueda">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Cerrar sesión</a>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <div class="text-center" style="margin: 20px 0;">
                        <img src="Img/cara1.jpg" alt="Usuario" class="rounded-circle"
                            style="width: 80px; height: 80px;">
                        <h6 class="text-white">Nombre del usuario</h6>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#" id="showMenu">
                                <span data-feather="home">Menu Principal</span>
                                Menu Principal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#DocentesMenu" id="showDocentes">
                                <span data-feather="users"></span>
                                Docentes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="showEstudiantes">
                                <span data-feather="layers"></span>
                                Estudiantes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="showReportes">
                                <span data-feather="file"></span>
                                Reportes
                            </a>
                        </li>
                    </ul>
                    <h6
                        class=" text-bg-light sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted ">
                        <span>Reportes guardados</span>
                        <a class="link-secondary " href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" id="page-title"></h1>
                    <div class="btn-toolbar ">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>

                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <!--Contenidos especificos (Docentes, Estudiantes y reportes)-->
                <div id="docentesContent" style="display: none;">
                    <!--Agregar docentes-->
                    <div>
                        <form id="docenteForm" method="POST" class="mt-4 needs-validation" novalidate
                            style=" border: 1px solid #ced4da; border-radius: 0.5rem; padding: 20px;">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="validationTooltip05" class="form-label">ID Docente</label>
                                    <input type="number" name="id_docente" class="form-control" id="validationTooltip05"
                                        required>
                                    <div class="invalid-tooltip">Coloca un ID válido.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTooltip01" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="validationTooltip01"
                                        required>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTooltip02" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" id="validationTooltip02"
                                        required>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTooltipUsername" class="form-label">Correo electrónico</label>
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control"
                                            id="validationTooltipUsername" required>
                                        <span class="input-group-text">@uniminuto.edu.co</span>
                                        <div class="invalid-tooltip">No se puede repetir usuarios, coloca un docente
                                            válido.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTooltipPassword" class="form-label">Contraseña</label>
                                    <input type="password" name="contraseña" class="form-control"
                                        id="validationTooltipPassword" required>
                                    <div class="invalid-tooltip">Coloca una contraseña válida.</div>
                                </div>
                                <div class=" col-12">
                                    <button class="btn btn-primary" type="submit" id="submitFormBtn">Enviar
                                        formulario</button>
                                </div>
                            </div>
                        </form>

                        <!--PARTE PHP-->
                        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id_docente"], $_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["contraseña"])) {
                            $id_docente = mysqli_real_escape_string($datosConexion, $_POST['id_docente']);
                            $nombreDocente = mysqli_real_escape_string($datosConexion, $_POST['nombre']);
                            $apellidoDocente = mysqli_real_escape_string($datosConexion, $_POST['apellido']);
                            $correoDocente = mysqli_real_escape_string($datosConexion, $_POST['email']);
                            $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);
                            $emailDocente = $correoDocente . '@uniminuto.edu.co';

                            $insertarDocenteSQL = "INSERT INTO Docentes (Id_Docente, Nombre, Apellido, Email, Contraseña) VALUES ('$id_docente', '$nombreDocente', '$apellidoDocente', '$emailDocente', '$contraseña')";
                            if (mysqli_query($datosConexion, $insertarDocenteSQL)) {
                                echo "<div class='alert alert-success'>Docente agregado exitosamente.</div>";
                                echo "<meta http-equiv='refresh' content='0; url=#DocentesMenu'>";
                            } else {
                                echo "<div class='alert alert-danger'>Error al agregar docente: " . mysqli_error($datosConexion) . "</div>";
                            }
                        } ?>
                    </div>

                    <div class="mt-4 col-12 mb-2">
                        <button id="toggleFormBtn" class="btn btn-secondary">Agregar Docente</button>
                    </div>

                    <div id="tablaMostrar" class="table-responsive " style="display: none;">
                        <table class="table table-sm table-hover table-dark styled-table ">
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
                            <!--MOSTRAR CONTENIDO TABLA DOCENTE-->

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
                                                
    <button type='button' class='btn btn-warning' onclick='showEditForm({$row['Id_Docente']})'>Editar</button>
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
                                    echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($datosConexion) . "</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!--Parte de editar docentes-->
                    <!--Parte PHP-->
                    <?PHP
                    if (isset($_POST['editar'])) {
                        $id = intval($_POST['id']); // Asegúrate de convertir a entero
                        $sql = "SELECT * FROM Docentes WHERE Id_Docente = ?";

                        $stmt = mysqli_prepare($datosConexion, $sql);
                        mysqli_stmt_bind_param($stmt, 'i', $id);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        if ($row = mysqli_fetch_array($result)) {
                            echo
                            "<div id='editarFormulario'>
                                <h2>Editar Usuario</h2>
                                <form action='AdminPanel.php' method='post'>
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

                    if (isset($_POST['update'])) {
                        $id_docente = $_POST['id_docente']; // Cambié el nombre a $id_docente para que sea consistente
                        $nombre = mysqli_real_escape_string($datosConexion, $_POST['Nombre']);
                        $apellido = mysqli_real_escape_string($datosConexion, $_POST['Apellido']);
                        $email = mysqli_real_escape_string($datosConexion, $_POST['Email']);
                        $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);

                        // Actualizar los datos del docente
                        $sqlUpdateDocente = "UPDATE Docentes SET Nombre='$nombre', Apellido='$apellido', Email='$email', Contraseña='$contraseña' WHERE Id_Docente='$id_docente'";

                        if (mysqli_query($datosConexion, $sqlUpdateDocente)) {
                            echo "<p>Datos actualizados correctamente.</p>";
                        } else {
                            echo "<p>Error al actualizar: " . mysqli_error($datosConexion) . "</p>";
                        }

                        echo "<meta http-equiv='refresh' content='0'>";
                    }



                    ?>

                </div>
                <!-- Contenido de estudiantes -->
                <div id="estudiantesContent" style="display: none;">

                    <p>Aquí va el contenido de los estudiantes...</p>
                </div>
                <!-- Contenido de reportes -->
                <div id="reportesContent" style="display: none;">
                    <p>Aquí va el contenido de los reportes...</p>
                </div>
                <!-- Contenido principal por defecto -->
                <div id="mainContent" style="display: block;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, optio. Distinctio, perspiciatis dicta
                    quae repellendus tempora veritatis nostrum. Dolorum dolor ut nostrum fuga accusantium quos debitis
                    modi laudantium veritatis odit!
                </div>
            </main>

        </div>
    </div>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="Js-Proyecto/interaccion.js"></script>
    <!--INICIA ICONOS-->
    <script>
    feather.replace();
    </script>

</body>


</html>