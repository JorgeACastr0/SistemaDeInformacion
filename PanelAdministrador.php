<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/styleLogin.css">

    <!-- Bootstrap CSS -->





    <title>Administracion</title>
</head>

<body>

    <div class="custom-header d-flex align-items-center ">
        <div class="navbar-collapse " id="navbarNav">
            <div class="app-brand py-2 col">
                <a href="PanelAdministrador.php">
                    <img src="Img/Mesa de trabajo 1.png" class="logo" alt="uniminuto">
                </a>

            </div>

        </div>


        <div class="">

        </div>

    </div>


    <div class="custom-intro"></div>
    <!-- Espacio que deje en la parte superior -->

    <!-- Barra de navegacion -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column" id="sidebar"
        style="height: 100vh; width: 250px; position: fixed; top: 0; left: 0; display: flex; flex-direction: column; margin-top: 80px; border-radius: 0 30px 15px 0; z-index: 11;">
        <!-- Ajusta el valor aquí para que emepzara desde un poco mas abajo -->

        <div class="text-center" style="margin: 20px 0;">
            <img src="Img/cara1.jpg" alt="Usuario" class="rounded-circle" style="width: 80px; height: 80px;">
            <h6 class="text-white">Nombre del Usuario</h6>
        </div>

        <div style="flex-grow: 1; display: flex; flex-direction: column; justify-content: flex-end ;">
            <div class="navbar-collapse flex-column" id="navbarNav">
                <ul class="flex-column navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="content" style="margin-left: 250px;">
            <h1>Bienvenido a mi sitio</h1>
        </div>

    </div>


    <!-- Botón para desplegar el menú en pantallas pequeñas -->
    <button id="toggleButton" class="btn btn-primary"
        style="display: none; position: fixed; top: 10px; left: 10px;">☰</button>

    <!-- Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Script para ocultar la barra lateral en pantallas pequeñas
        $(document).ready(function() {
            function checkWidth() {
                if ($(window).width() < 768) {
                    $('#sidebar').hide(); // Ocultar la barra lateral
                    $('#toggleButton').show(); // Mostrar el botón para desplegar
                } else {
                    $('#sidebar').show(); // Mostrar la barra lateral
                    $('#toggleButton').hide(); // Ocultar el botón
                }
            }

            // Función para alternar la visibilidad de la barra lateral
            $('#toggleButton').click(function() {
                $('#sidebar').toggle(); // Alternar la visibilidad de la barra lateral
            });

            checkWidth(); // Llamar a la función al cargar la página

            $(window).resize(function() {
                checkWidth(); // Llamar a la función al redimensionar la ventana
            });
        });
    </script>






    <!--

    <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
  </div>
</div>


-->

    <!--




    <div class="d-flex flex-wrap">


        <div class="content flex-grow-1">
            <header class="d-flex justify-content-between align-items-center">
                <h1>Bienvenido al Dashboard</h1>
                <button class="btn btn-primary">Cerrar sesión</button>
            </header>

            <div class="row mt-4">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta 1</h5>
                            <p class="card-text">Contenido de la tarjeta 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta 2</h5>
                            <p class="card-text">Contenido de la tarjeta 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta 3</h5>
                            <p class="card-text">Contenido de la tarjeta 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <!--
    <div class="d-flex flex-wrap">
        <nav class="sidebar flex-shrink-0">
            <h2 class="text-white">Dashboard</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configuración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ayuda</a>
                </li>
            </ul>
        </nav>

        <div class="content flex-grow-1">
            <header class="d-flex justify-content-between align-items-center">
                <h1>Bienvenido al Dashboard</h1>
                <button class="btn btn-primary">Cerrar sesión</button>
            </header>

            <div class="row mt-4">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta 1</h5>
                            <p class="card-text">Contenido de la tarjeta 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta 2</h5>
                            <p class="card-text">Contenido de la tarjeta 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta 3</h5>
                            <p class="card-text">Contenido de la tarjeta 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    -->


    <!-- jQuery, Popper.js, Bootstrap JS -->

</body>

</html>



<!--
                        <form id="docenteForm" class="mt-4 row g-3 needs-validation" novalidate style="display: none;">
                            <div class="col-md-4 position-relative">
                                <input type="number" placeholder="ID Docente" minlength="2" maxlength="10"
                                    class="form-control" id="validationTooltip05" required>
                                <div class="invalid-tooltip">
                                    Coloca un ID válido.
                                </div>
                            </div>

                            <div class="col-md-4 position-relative">
                                <input type="text" placeholder="Nombre" minlength="3" maxlength="40"
                                    class="form-control" id="validationTooltip01" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4 position-relative">
                                <input type="text" placeholder="Apellido" minlength="3" maxlength="40"
                                    class="form-control" id="validationTooltip02" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4 position-relative">
                                <div class="input-group has-validation">
                                    <input type="text" placeholder="Correo electrónico" minlength="3" maxlength="40"
                                        class="form-control" id="validationTooltipUsername"
                                        aria-describedby="validationTooltipUsernamePrepend" required>
                                    <span class="input-group-text"
                                        id="validationTooltipUsernamePrepend">@uniminuto.edu.co</span>
                                    <div class="invalid-tooltip">
                                        No se puede repetir usuarios, coloca un docente válido.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 position-relative">
                                <input type="password" placeholder="Contraseña" minlength="6" maxlength="15"
                                    class="form-control" id="validationTooltipPassword" required>
                                <div class="invalid-tooltip">
                                    Coloca una contraseña válida.
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Enviar formulario</button>
                            </div>
                        </form>
                            -->




<?php

session_start();

//Variables de conexion:
$ubicacionDB = "localhost:3307";
$usuarioDB = "root";
$claveDB = "271198";
$nombreDB = "pruebas";

//Crea la conexion a la BD MySQL dentro de DOcker
$datosConexion = mysqli_connect($ubicacionDB, $usuarioDB, $claveDB, $nombreDB);

//Compureba que si se haya conectado 
if (!$datosConexion) {
    die("Conexion a la BD fallida: " . mysqli_connect_error());
} else {
    #echo "Conectado a la base de datos de Transcosas <hr>";
}
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
                        <h6 class="text-white">Nombre del usuario</h6>
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
                </div>
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
                                $VerDocentesSQL = "SELECT * FROM Docentes";
                                $queryDocentes = mysqli_query($datosConexion, $VerDocentesSQL);
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
                                    echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($datosConexion) . "</td></tr>";
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

                        <form id="docenteForm" method="POST" action="Admin.php" class="mt-4 needs-validation" novalidate
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

                            </div>
                        </form>

                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (empty($_POST)) {
                                echo "No se han enviado datos.";
                            } else {
                                if (isset($_POST["id_docente"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["email"]) && isset($_POST["contraseña"])) {

                                    $id_docente = mysqli_real_escape_string($datosConexion, $_POST['id_docente']);
                                    $nombreDocente = mysqli_real_escape_string($datosConexion, $_POST['nombre']);
                                    $apellidoDocente = mysqli_real_escape_string($datosConexion, $_POST['apellido']);
                                    $correoDocente = mysqli_real_escape_string($datosConexion, $_POST['email']);
                                    $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);

                                    $insertarUsuariosSQL = "INSERT INTO Docentes (Id_Docente, Nombre, Apellido, Email, contraseña) VALUES ($id_docente, '$nombreDocente', '$apellidoDocente', '$correoDocente', '$contraseña')";
                                    mysqli_query($datosConexion, $insertarUsuariosSQL);
                                    if (mysqli_query($datosConexion, $insertarUsuariosSQL)) {
                                        header("Location: Admin.php"); // Redirige para evitar reenvíos
                                        echo "Docente agregado con éxito.";
                                        exit();
                                    } else {
                                        echo "Error: " . mysqli_error($datosConexion);
                                    }
                                }
                            }
                        }

                        ?>

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




<?php

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
                                <form action='Admin.php' method='post'>
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




















<?php
include 'BD/conexion.php';
/*Apartado sql Docentes tener en cuenta Metodo POST */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id_docente"], $_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["contraseña"])) {
    $id_docente = mysqli_real_escape_string($datosConexion, $_POST['id_docente']);
    $nombreDocente = mysqli_real_escape_string($datosConexion, $_POST['nombre']);
    $apellidoDocente = mysqli_real_escape_string($datosConexion, $_POST['apellido']);
    $correoDocente = mysqli_real_escape_string($datosConexion, $_POST['email']);
    $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);
    $emailDocente = $correoDocente . '@uniminuto.edu.co';

    $insertarDocenteSQL = "INSERT INTO Docentes (Id_Docente, Nombre, Apellido, Email, Contraseña) VALUES ('$id_docente', '$nombreDocente', '$apellidoDocente', '$emailDocente', '$contraseña')";

    if (mysqli_query($datosConexion, $insertarDocenteSQL)) {
        header("Location: Admin.php"); // Redirige para evitar reenvíos
        exit();
    } else {
        $error = "Error: " . mysqli_error($datosConexion);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="CSS/nuevo.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Panel Administrador</title>
</head>
<div class=" text-center text-info bg-dark" id="currentDateAll"></div>

<body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentDateAll = document.getElementById('currentDateAll');
            if (currentDateAll) {
                let formattedDate = new Date().toLocaleDateString(); // Example date formatting
                currentDateAll.innerText = formattedDate;
            } else {
                console.error("Element with ID 'currentDateAll' not found.");
            }
        });
    </script>
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
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home">Menu Principal</span>
                                Menu Principal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" id="showDocentes">
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
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-dark styled-table">
                            <thead>
                                <tr class="text-center">
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
                                    echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($datosConexion) . "</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!--Parfte de editar docentes-->

                    <!--Agregar docentes-->
                    <div>
                        <div class="col-12 mb-2">
                            <button id="toggleFormBtn" class="btn btn-secondary">Agregar Docente</button>
                        </div>

                        <form id="docenteForm" method="POST" action="" class="mt-4 needs-validation" novalidate
                            style="display: none; border: 1px solid #ced4da; border-radius: 0.5rem; padding: 20px;">
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
                                <div class="col-md-6">
                                    <label for="validationTooltipUsername" class="form-label">Correo electrónico</label>
                                    <input type="text" name="email" class="form-control" id="validationTooltipUsername"
                                        required>
                                    <span class="input-group-text">@uniminuto.edu.co</span>
                                    <div class="invalid-tooltip">No se puede repetir usuarios, coloca un docente válido.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationTooltipPassword" class="form-label">Contraseña</label>
                                    <input type="password" name="contraseña" class="form-control"
                                        id="validationTooltipPassword" required>
                                    <div class="invalid-tooltip">Coloca una contraseña válida.</div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Enviar formulario</button>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($error)) echo "<div class='alert alert-danger'>{$error}</div>"; ?>

                    </div>

                </div>

                <div id="estudiantesContent" style="display: none;">

                    <p>Aquí va el contenido de los estudiantes...</p>
                </div>

                <div id="reportesContent" style="display: none;">
                    <p>Aquí va el contenido de los reportes...</p>
                </div>
                <div id="mainContent" style="display: block;">
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


            </main>
        </div>
    </div>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>

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

    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="Js-Proyecto/main.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>


















<?php
include 'BD/conexion.php';

// Apartado sql Docentes tener en cuenta Metodo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id_docente"], $_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["contraseña"])) {
    $id_docente = mysqli_real_escape_string($datosConexion, $_POST['id_docente']);
    $nombreDocente = mysqli_real_escape_string($datosConexion, $_POST['nombre']);
    $apellidoDocente = mysqli_real_escape_string($datosConexion, $_POST['apellido']);
    $correoDocente = mysqli_real_escape_string($datosConexion, $_POST['email']);
    $contraseña = mysqli_real_escape_string($datosConexion, $_POST['contraseña']);
    $emailDocente = $correoDocente . '@uniminuto.edu.co';

    $insertarDocenteSQL = "INSERT INTO Docentes (Id_Docente, Nombre, Apellido, Email, Contraseña) VALUES ('$id_docente', '$nombreDocente', '$apellidoDocente', '$emailDocente', '$contraseña')";

    // Actualizar docente
    $actualizarDocenteSQL = "UPDATE Docentes SET Nombre='$nombreDocente', Apellido='$apellidoDocente', Email='$emailDocente', Contraseña='$contraseña' WHERE Id_Docente='$id_docente'";
}

// Manejo de la edición
if (isset($_POST['editar'])) {
    $id = intval($_POST['id']); // Asegúrate de convertir a entero
    $sql = "SELECT * FROM Docentes WHERE Id_Docente = ?";

    $stmt = mysqli_prepare($datosConexion, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


    if ($row = mysqli_fetch_array($result)) {
        $editarFormulario = "
        <div id='editarFormulario'>
            <h2>Editar Usuario</h2>
            <form action='Admin.php' method='post'>
                <input type='hidden' name='id_docente' value='{$row['Id_Docente']}' required>
                <div class='mb-3'>
                    <label for='nombre' class='form-label'>Nombre</label>
                    <input type='text' name='nombre' value='{$row['Nombre']}' required class='form-control' id='nombre'>
                </div>
                <div class='mb-3'>
                    <label for='apellido' class='form-label'>Apellido</label>
                    <input type='text' name='apellido' value='{$row['Apellido']}' required class='form-control' id='apellido'>
                </div>
                <div class='mb-3'>
                    <label for='email' class='form-label'>Email</label>
                    <input type='text' name='email' value='{$row['Email']}' required class='form-control' id='email'>
                </div>
                <div class='mb-3'>
                    <label for='contraseña' class='form-label'>Contraseña</label>
                    <input type='text' name='contraseña' value='{$row['Contraseña']}' required class='form-control' id='contraseña'>
                </div>
                <input type='submit' name='update' value='Actualizar' class='btn btn-primary'>
            </form>
        </div>";
    } else {
        $editarFormulario = "<p>No se encontró el docente.</p>";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="CSS/nuevo.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Panel Administrador</title>
</head>

<body>
    <div class="text-center text-info bg-dark" id="currentDateAll"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentDateAll = document.getElementById('currentDateAll');
            if (currentDateAll) {
                let formattedDate = new Date().toLocaleDateString(); // Example date formatting
                currentDateAll.innerText = formattedDate;
            }
        });
    </script>

    <!-- Barra de navegación -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MinuTech</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                            <a class="nav-link active" aria-current="page" href="#" id="menuPrincipal">
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
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" id="page-title">Docentes</h1>
                </div>

                <!-- Contenidos específicos (Docentes, Estudiantes y Reportes) -->
                <div id="docentesContent">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-dark styled-table">
                            <thead>
                                <tr class="text-center">
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
                                $VerDocentesSQL = "SELECT * FROM Docentes";
                                $queryDocentes = mysqli_query($datosConexion, $VerDocentesSQL);
                                if ($queryDocentes) {
                                    while ($row = mysqli_fetch_array($queryDocentes)) {
                                        echo "<tr>
                                            <td>{$row['Id_Docente']}</td>
                                            <td>{$row['Nombre']}</td>
                                            <td>{$row['Apellido']}</td>
                                            <td>{$row['Email']}</td>
                                            <td>
                                                <form method='POST'>
                                                    <input type='hidden' name='id' value='{$row['Id_Docente']}'>
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

                    <div id="editarFormulario" style="margin-top: 20px;">
                        <?php if (isset($editarFormulario)) echo $editarFormulario; ?>
                    </div>

                    <div>
                        <div class="col-12 mb-2">
                            <button id="toggleFormBtn" class="btn btn-secondary">Agregar Docente</button>
                        </div>

                        <form id="docenteForm" method="POST" action="" class="mt-4 needs-validation" novalidate
                            style="display: none; border: 1px solid #ced4da; border-radius: 0.5rem; padding: 20px;">
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
                                <div class="col-md-6">
                                    <label for="validationTooltipUsername" class="form-label">Correo electrónico</label>
                                    <input type="text" name="email" class="form-control" id="validationTooltipUsername"
                                        required>
                                    <span class="input-group-text">@uniminuto.edu.co</span>
                                    <div class="invalid-tooltip">No se puede repetir usuarios, coloca un docente válido.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationTooltipPassword" class="form-label">Contraseña</label>
                                    <input type="password" name="contraseña" class="form-control"
                                        id="validationTooltipPassword" required>
                                    <div class="invalid-tooltip">Coloca una contraseña válida.</div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Enviar formulario</button>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($error)) echo "<div class='alert alert-danger'>{$error}</div>"; ?>

                    </div>
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


                <div id="estudiantesContent" style="display: none;">
                    <h2>Contenido Estudiantes</h2>
                </div>

                <div id="reportesContent" style="display: none;">
                    <h2>Contenido Reportes</h2>
                </div>

                <script>
                    // Manejo de pestañas
                    const menuPrincipal = document.getElementById('menuPrincipal');
                    const showDocentes = document.getElementById('showDocentes');
                    const showEstudiantes = document.getElementById('showEstudiantes');
                    const showReportes = document.getElementById('showReportes');
                    const docentesContent = document.getElementById('docentesContent');
                    const estudiantesContent = document.getElementById('estudiantesContent');
                    const reportesContent = document.getElementById('reportesContent');
                    const pageTitle = document.getElementById('page-title');

                    menuPrincipal.addEventListener('click', function() {
                        docentesContent.style.display = 'none';
                        estudiantesContent.style.display = 'none';
                        reportesContent.style.display = 'none';
                        pageTitle.textContent = 'Menu Principal';
                    });

                    showDocentes.addEventListener('click', function() {
                        docentesContent.style.display = 'block';
                        estudiantesContent.style.display = 'none';
                        reportesContent.style.display = 'none';
                        pageTitle.textContent = 'Docentes';
                    });

                    showEstudiantes.addEventListener('click', function() {
                        docentesContent.style.display = 'none';
                        estudiantesContent.style.display = 'block';
                        reportesContent.style.display = 'none';
                        pageTitle.textContent = 'Estudiantes';
                    });

                    showReportes.addEventListener('click', function() {
                        docentesContent.style.display = 'none';
                        estudiantesContent.style.display = 'none';
                        reportesContent.style.display = 'block';
                        pageTitle.textContent = 'Reportes';
                    });
                </script>

                <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
            </main>
        </div>
    </div>
</body>

</html>