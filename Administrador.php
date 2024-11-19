<?php
include 'BD/conexion.php';
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="Js-Proyecto/PanelAdministrado.js"></script>
    <title>Administrador</title>

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
                            <a class="nav-link active" aria-current="page" href="#" id="showMenuP">
                                <span data-feather="home">Menu Principal</span>
                                Menu Principal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Docentes" id="showDocentes">
                                <span data-feather="users"></span>
                                Docentes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Estudiantes" id="showEstudiantes">
                                <span data-feather="layers"></span>
                                Estudiantes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Reportes" id="showReportes">
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
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Contraseña</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tablaDocentes">
                                <?php
                                // Consulta para obtener la lista de docentes
                                $sql = "SELECT * FROM Docentes";
                                $result = mysqli_query($datosConexion, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['Id_Docente']}</td>";
                                    echo "<td>{$row['Nombre']}</td>";
                                    echo "<td>{$row['Apellido']}</td>";
                                    echo "<td>{$row['Email']}</td>";
                                    echo "<td>{$row['Contraseña']}</td>";
                                    echo "<td>
                                    <button class='btn btn-warning' onclick='cargarDocente({$row['Id_Docente']})'>Editar</button>
                                    <button class='btn btn-danger' onclick='eliminarDocente({$row['Id_Docente']})'>Eliminar</button></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!--Parte de editar docentes-->
                    <div class="modal fade" id="editarDocenteModal" tabindex="-1" aria-labelledby="editarDocenteLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editarDocenteLabel">Editar Docente</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form id="editarDocenteForm">
                                    <div class="modal-body">
                                    <input type="hidden" name="id_docente" id="editIdDocente">
                                        
                                        <div class="mb-3">
                                            <label for="editNombre" class="form-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" id="editNombre"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editApellido" class="form-label">Apellido</label>
                                            <input type="text" name="apellido" class="form-control" id="editApellido"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editEmail" class="form-label">Correo electrónico</label>
                                            <input type="email" name="email" class="form-control" id="editEmail"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editContraseña" class="form-label">Contraseña</label>
                                            <input type="password" name="contraseña" class="form-control"
                                                id="editContraseña" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!--Agregar docentes-->
                    <div>
                        <div class="col-12 mb-2">
                            <button id="toggleFormBtn" class="btn btn-secondary">Agregar Docente</button>
                        </div>

                        <form id="docenteForm" method="POST" class="mt-4 needs-validation" novalidate>
                            <div class="row g-3">
                                <!-- Campos del formulario -->
                                <div class="col-md-4">
                                    <label for="idDocente" class="form-label">ID Docente</label>
                                    <input type="number" name="id_docente" class="form-control" id="idDocente" required>
                                    <div class="invalid-tooltip">Coloca un ID válido.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" id="apellido" required>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control" id="email" required>
                                        <span class="input-group-text">@uniminuto.edu.co</span>
                                        <div class="invalid-tooltip">Coloca un correo válido.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="contraseña" class="form-label">Contraseña</label>
                                    <input type="password" name="contraseña" class="form-control" id="contraseña"
                                        required>
                                    <div class="invalid-tooltip">Coloca una contraseña válida.</div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Agregar Docente</button>
                                </div>
                            </div>
                        </form>



                    </div>

                </div>

                <div id="estudiantesContent" style="display: none;">

                    <p>Aquí va el contenido de los estudiantes...</p>
                </div>

                <div id="reportesContent" style="display: none;">
                    <p>Aquí va el contenido de los reportes...</p>
                </div>
                <div id="mainContent" style="display: none;">
                    <P>Menu Principal</P>
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
        feather.replace();
    </script>
    <script src="Js-Proyecto/PanelAdministrado.js"></script>
</body>

</html>