<?php
include("BD/conexion.php");
$leerDocentesSQL = "SELECT * FROM Docentes";
$query = mysqli_query($conn, $leerDocentesSQL);



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


                    <!--panelAdmin-->
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
                                if ($query) {
                                    while ($row = mysqli_fetch_array($query)) {
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


                </div>



                <div id="estudiantesContent" style="display: none;">

                    <p>Aquí va el contenido de los estudiantes...</p>
                </div>

                <div id="reportesContent" style="display: none;">
                    < <p>Aquí va el contenido de los reportes...</p>
                </div>




                <div id="mainContent">

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
                                    <td>1,001</td>
                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>placeholder</td>
                                    <td>irrelevant</td>
                                    <td>visual</td>
                                    <td>layout</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>data</td>
                                    <td>rich</td>
                                    <td>dashboard</td>
                                    <td>tabular</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>information</td>
                                    <td>placeholder</td>
                                    <td>illustrative</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>text</td>
                                    <td>random</td>
                                    <td>layout</td>
                                    <td>dashboard</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>dashboard</td>
                                    <td>irrelevant</td>
                                    <td>text</td>
                                    <td>placeholder</td>
                                </tr>
                                <tr>
                                    <td>1,006</td>
                                    <td>dashboard</td>
                                    <td>illustrative</td>
                                    <td>rich</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,007</td>
                                    <td>placeholder</td>
                                    <td>tabular</td>
                                    <td>information</td>
                                    <td>irrelevant</td>
                                </tr>
                                <tr>
                                    <td>1,008</td>
                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>1,009</td>
                                    <td>placeholder</td>
                                    <td>irrelevant</td>
                                    <td>visual</td>
                                    <td>layout</td>
                                </tr>
                                <tr>
                                    <td>1,010</td>
                                    <td>data</td>
                                    <td>rich</td>
                                    <td>dashboard</td>
                                    <td>tabular</td>
                                </tr>
                                <tr>
                                    <td>1,011</td>
                                    <td>information</td>
                                    <td>placeholder</td>
                                    <td>illustrative</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,012</td>
                                    <td>text</td>
                                    <td>placeholder</td>
                                    <td>layout</td>
                                    <td>dashboard</td>
                                </tr>
                                <tr>
                                    <td>1,013</td>
                                    <td>dashboard</td>
                                    <td>irrelevant</td>
                                    <td>text</td>
                                    <td>visual</td>
                                </tr>
                                <tr>
                                    <td>1,014</td>
                                    <td>dashboard</td>
                                    <td>illustrative</td>
                                    <td>rich</td>
                                    <td>data</td>
                                </tr>
                                <tr>
                                    <td>1,015</td>
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
    function showContent(contentId) {
        var contents = ['docentesContent', 'estudiantesContent', 'reportesContent', 'mainContent'];
        contents.forEach(function(id) {
            var element = document.getElementById(id);
            element.style.display = (id === contentId) ? 'block' : 'none';
        });
    }

    document.getElementById('showDocentes').addEventListener('click', function() {
        showContent('docentesContent');
    });

    document.getElementById('showEstudiantes').addEventListener('click', function() {
        showContent('estudiantesContent');
    });

    document.getElementById('showReportes').addEventListener('click', function() {
        showContent('reportesContent');
    });
    </script>



    <!--Script para cambio de nombre automatico-->
    <script>
    function showContent(contentId, title) {
        var contents = ['docentesContent', 'estudiantesContent', 'reportesContent'];
        contents.forEach(function(id) {
            var element = document.getElementById(id);
            element.style.display = (id === contentId) ? 'block' : 'none';
        });
        // Actualiza el título de la página
        document.getElementById('page-title').innerText = title;
    }

    document.getElementById('showDocentes').addEventListener('click', function() {
        showContent('docentesContent', 'Docentes');
    });

    document.getElementById('showEstudiantes').addEventListener('click', function() {
        showContent('estudiantesContent', 'Estudiantes');
    });

    document.getElementById('showReportes').addEventListener('click', function() {
        showContent('reportesContent', 'Reportes');
    });
    </script>

</body>

</html>