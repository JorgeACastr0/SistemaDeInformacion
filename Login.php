<?php
include 'BD/conexion.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/CSS" href="CSS/styleLogin.css">



    <title>Login</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">


    <main class="form-signin w-100 m-auto">
        <form method="POST">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3"></div>
            <img src="Img/LogoMDD.png" class="img-fluid" alt="imagen del logo universidad">
            </div>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
        </form>
    </main>

    <?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar si el usuario es Estudiante
    $sql = "SELECT * FROM Estudiantes WHERE Email = ? AND Contraseña = ?";
    $stmt = $datosConexion->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Redirigir al panel de estudiantes
        header("Location: panel_estudiante.php");
        exit();
    }

 // Validar si el usuario es Docente
 $sql = "SELECT * FROM Docentes WHERE Email = ? AND Contraseña = ?";
 $stmt = $datosConexion->prepare($sql); //Prepara la conexion de arriba 
 $stmt->bind_param("ss", $email, $password); // Aqui bind_param enlaza los ? de la consulta sql por las variables que yo le diga ("ss" significa que son dos campos tipo string)
 $stmt->execute();
 $result = $stmt->get_result();

 if ($result->num_rows > 0) {
     // Redirigir al panel de docentes
     header("Location: panel_docente.php");
     exit();
 }

 // Validar si el usuario es Administrativo
 $sql = "SELECT * FROM Administrativo WHERE Email = ? AND Contraseña = ?";
 $stmt = $datosConexion->prepare($sql);
 $stmt->bind_param("ss", $email, $password);
 $stmt->execute();
 $result = $stmt->get_result();

 if ($result->num_rows > 0) {
     // Redirigir al panel de administrativos
     header("Location: AdminPanel.php");
     exit();
 }

 // Si no se encuentra el usuario
 $error = "Credenciales incorrectas";
}
    ?>


    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <!--Colocar acceso a Bootstrap Js-->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>