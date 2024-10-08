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
        $(document).ready(function () {
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
            $('#toggleButton').click(function () {
                $('#sidebar').toggle(); // Alternar la visibilidad de la barra lateral
            });

            checkWidth(); // Llamar a la función al cargar la página

            $(window).resize(function () {
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