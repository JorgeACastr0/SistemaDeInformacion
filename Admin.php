<?php
session_start();
include("BD/conexion.php");
$VerDocentesSQL = "SELECT * FROM Docentes";
$queryDocentes = mysqli_query($conn, $VerDocentesSQL);
$insertDocenteSQL = "INSERT INTO Docentes (Id_Docente, Nombre, Apellido, Email,Id_Administrativo, Contraseña, ) VALUES "

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Colocar acceso a Bootstrap css-->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <link href="CSS/nuevo.css" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>

    <title>Panel Administrador</title>
</head>

<body>
    <!--Barra de navegacion-->
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
                <a class="nav-link px-3" href="#">Cerrar sesion</a>
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
                        <h6 class="text-white">Nombre del Usuario</h6>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Menu Principal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="showDocentes">
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
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" id="page-title"> </h1>
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


                    <!--Tabla Docentes Agregados panelAdmin-->
                    <div class="table-responsive ">
                        <table class="table  table-sm table-hover table-dark styled-table ">
                            <thead>
                                <tr class=" text-center">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if ($queryDocentes) {
                                    while ($row = mysqli_fetch_array($queryDocentes)) {
                                        ?>
                                <tr>
                                    <td><?= $row["Id_Docente"] ?></td>
                                    <td><?= $row["Nombre"] ?></td>
                                    <td><?= $row["Apellido"] ?></td>
                                    <td><?= $row["Email"] ?></td>
                                    <td>
                                        <form class=" text-center" method='POST'>
                                            <input type='hidden' name='id' value="<?= $row["Id_Docente"] ?>">
                                            <button type='submit' name='editar'>Editar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form class=" text-center" method='POST' action=''>
                                            <input type='hidden' name='id' value="<?= $row["Id_Docente"] ?>">
                                            <button type='submit' name='delete'>Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    // Manejo de errores
                                    echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($conn) . "</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!--Agregar docentes-->


                    <div>

                        <div class="col-12 mb-2">
                            <button id="toggleFormBtn" class="btn btn-secondary">Agregar Docente</button>
                        </div>

                        <form id="docenteForm" class="mt-4 needs-validation" novalidate
                            style="display: none; border: 1px solid #ced4da; border-radius: 0.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); padding: 20px;">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="validationTooltip05" class="form-label">ID Docente</label>
                                    <input type="number" name="id_docente" placeholder="ID Docente" minlength="2"
                                        maxlength="10" class="form-control" id="validationTooltip05" required>
                                    <div class="invalid-tooltip">
                                        Coloca un ID válido.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTooltip01" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" placeholder="Nombre" minlength="3" maxlength="40"
                                        class="form-control" id="validationTooltip01" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTooltip02" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" placeholder="Apellido" minlength="3"
                                        maxlength="40" class="form-control" id="validationTooltip02" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationTooltipUsername" class="form-label">Correo electrónico</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="email" placeholder="Correo electrónico" minlength="3"
                                            maxlength="40" class="form-control" id="validationTooltipUsername"
                                            aria-describedby="validationTooltipUsernamePrepend" required>
                                        <span class="input-group-text"
                                            id="validationTooltipUsernamePrepend">@uniminuto.edu.co</span>
                                        <div class="invalid-tooltip">
                                            No se puede repetir usuarios, coloca un docente válido.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationTooltipPassword" class="form-label">Contraseña</label>
                                    <input type="password" name="contraseña" placeholder="Contraseña" minlength="6"
                                        maxlength="15" class="form-control" id="validationTooltipPassword" required>
                                    <div class="invalid-tooltip">
                                        Coloca una contraseña válida.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Enviar formulario</button>
                                </div>
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    var_dump($_POST); // Esto mostrará todos los datos recibidos
                                    // ... resto del código
                                }


                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    // Recibe los datos del formulario
                                    $id_docente = $_POST['id_docente'];
                                    $nombre = $_POST['nombre'];
                                    $apellido = $_POST['apellido'];
                                    $correo = $_POST['email'];
                                    $contraseña = $_POST['contraseña'];

                                    // Concatenar la parte fija del correo
                                    $email = $correo . '@uniminuto.edu.co';

                                    // Asegúrate de que el ID administrativo esté definido
                                
                                    $id_administrativo = $_SESSION['id_administrativo'];


                                    // Prepara la consulta
                                    $stmt = mysqli_prepare($conn, "INSERT INTO Docentes (Id_Docente, Nombre, Apellido, Email, Id_Administrativo, Contraseña) VALUES (?, ?, ?, ?, ?, ?)");
                                    mysqli_stmt_bind_param($stmt, 'isssis', $id_docente, $nombre, $apellido, $email, $id_administrativo, $contraseña);

                                    // Ejecuta la consulta
                                    if (mysqli_stmt_execute($stmt)) {
                                        echo "Docente agregado con éxito.";
                                    } else {
                                        echo "Error al agregar docente: " . mysqli_stmt_error($stmt);
                                    }

                                    // Cierra la declaración
                                    mysqli_stmt_close($stmt);
                                }

                                // Cierra la conexión
                                mysqli_close($conn);

                                ?>

                            </div>
                        </form>




                    </div>


                    <script>
                    document.getElementById('toggleFormBtn').addEventListener('click', function() {
                        const form = document.getElementById('docenteForm');
                        if (form.style.display === 'none' || form.style.display === '') {
                            form.style.display = 'block';
                            this.textContent = 'Ocultar Formulario';
                        } else {
                            form.style.display = 'none';
                            this.textContent = 'Agregar Docente';
                        }
                    });
                    </script>


                </div>




                <div id="estudiantesContent" style="display: none;">

                    <p>Aquí va el contenido de los estudiantes...</p>
                </div>

                <div id="reportesContent" style="display: none;">
                    <p>Aquí va el contenido de los reportes...</p>
                </div>




                <div id="mainContent" style="display: block;">

                    <!--Se implementa para que desaparezca el contenido cuando Js active algun modulo-->
                    <!--Espacio de grafica-->
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                    <h2>Section title</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>text</td>
                                </tr>
                                <tr>

                                    <td>placeholder</td>
                                    <td>irrelevant</td>
                                    <td>visual</td>
                                    <td>layout</td>
                                </tr>
                                <tr>

                                    <td>data</td>
                                    <td>rich</td>
                                    <td>dashboard</td>
                                    <td>tabular</td>
                                </tr>
                                <tr>

                                    <td>information</td>
                                    <td>placeholder</td>
                                    <td>illustrative</td>
                                    <td>data</td>
                                </tr>
                                <tr>

                                    <td>text</td>
                                    <td>random</td>
                                    <td>layout</td>
                                    <td>dashboard</td>
                                </tr>
                                <tr>

                                    <td>dashboard</td>
                                    <td>irrelevant</td>
                                    <td>text</td>
                                    <td>placeholder</td>
                                </tr>
                                <tr>

                                    <td>dashboard</td>
                                    <td>illustrative</td>
                                    <td>rich</td>
                                    <td>data</td>
                                </tr>
                                <tr>

                                    <td>placeholder</td>
                                    <td>tabular</td>
                                    <td>information</td>
                                    <td>irrelevant</td>
                                </tr>
                                <tr>

                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>text</td>
                                </tr>
                                <tr>

                                    <td>placeholder</td>
                                    <td>irrelevant</td>
                                    <td>visual</td>
                                    <td>layout</td>
                                </tr>
                                <tr>

                                    <td>data</td>
                                    <td>rich</td>
                                    <td>dashboard</td>
                                    <td>tabular</td>
                                </tr>
                                <tr>

                                    <td>information</td>
                                    <td>placeholder</td>
                                    <td>illustrative</td>
                                    <td>data</td>
                                </tr>
                                <tr>

                                    <td>text</td>
                                    <td>placeholder</td>
                                    <td>layout</td>
                                    <td>dashboard</td>
                                </tr>
                                <tr>

                                    <td>dashboard</td>
                                    <td>irrelevant</td>
                                    <td>text</td>
                                    <td>visual</td>
                                </tr>
                                <tr>

                                    <td>dashboard</td>
                                    <td>illustrative</td>
                                    <td>rich</td>
                                    <td>data</td>
                                </tr>
                                <tr>

                                    <td>random</td>
                                    <td>tabular</td>
                                    <td>information</td>
                                    <td>text</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <!--Colocar acceso a Bootstrap Js-->

    <script src="Js-Proyecto/main.js"></script>
    <script>
    feather.replace(); // Inicializa Feather Icons (Para que esten disponibles cuando se inicialice el sistema)
    </script>



    <!--Permite accionar ventanas y oculta contenido (Menu,Docentes,Estudiantes,Reportes)-->
    <script>
    function showContent(contentId, title) {
        // Lista de los IDs de los contenidos que quieres controlar
        var contents = ['mainContent', 'docentesContent', 'estudiantesContent', 'reportesContent'];

        // Oculta todos los contenidos
        contents.forEach(function(id) {
            var element = document.getElementById(id);
            element.style.display = 'none'; // Ocultar cada sección
        });

        // Muestra solo el contenido correspondiente
        var activeElement = document.getElementById(contentId);
        if (activeElement) {
            activeElement.style.display = 'block'; // Mostrar la sección activa
        }

        // Actualiza el título de la página
        document.getElementById('page-title').innerText = title;
    }

    // Asocia cada botón de navegación con su contenido correspondiente
    document.getElementById('showDocentes').addEventListener('click', function() {
        showContent('docentesContent', 'Docentes');
    });

    document.getElementById('showEstudiantes').addEventListener('click', function() {
        showContent('estudiantesContent', 'Estudiantes');
    });

    document.getElementById('showReportes').addEventListener('click', function() {
        showContent('reportesContent', 'Reportes');
    });

    // Agrega el evento para el Menu Principal
    document.querySelector('.nav-link.active').addEventListener('click', function() {
        showContent('mainContent', 'Main Content');
    });
    </script>


</body>

</html>