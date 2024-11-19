<?php
include 'BD/conexion.php';

$vista = isset($_GET['vista']) ? $_GET['vista'] : 'listado_docentes';
$mensaje = null;

// Procesar registro de asistencia
if ($_SERVER["REQUEST_METHOD"] == "POST" && $vista == 'llenar_asistencia') {
    $id_docente = intval($_POST['id_docente']);
    $id_estudiante = intval($_POST['id_estudiante']);
    $fecha = date("Y-m-d H:i:s");

    $sql = "INSERT INTO Tutorias (Id_Docente, Id_Estudiante, Fecha) VALUES (?, ?, ?)";
    $stmt = $datosConexion->prepare($sql);
    $stmt->bind_param("iis", $id_docente, $id_estudiante, $fecha);

    if ($stmt->execute()) {
        $mensaje = "Asistencia registrada exitosamente.";
    } else {
        $mensaje = "Error al registrar la asistencia: " . $datosConexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/faviconMDD.png"/>
    <title>Panel Estudiante</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container py-5">
        <?php if ($vista == 'listado_docentes'): ?>
            <!-- Vista: Listado de Docentes -->
            <h1 class="text-center mb-4">Panel de Estudiante</h1>
            <div class="row">
                <?php
                $sql = "SELECT * FROM Docentes";
                $result = $datosConexion->query($sql);
                while ($docente = $result->fetch_assoc()):
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($docente['Nombre'] . ' ' . $docente['Apellido']); ?></h5>
                                <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($docente['Email']); ?></p>
                                <p class="card-text"><strong>Horario:</strong> <?php echo htmlspecialchars($docente['Horario']); ?></p>
                                <a href="?vista=perfil_docente&id=<?php echo $docente['Id_Docente']; ?>" class="btn btn-primary w-100">Ver Perfil</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php elseif ($vista == 'perfil_docente'): ?>
            <!-- Vista: Perfil del Docente -->
            <?php
            $id_docente = intval($_GET['id']);
            $sql = "SELECT * FROM Docentes WHERE Id_Docente = ?";
            $stmt = $datosConexion->prepare($sql);
            $stmt->bind_param("i", $id_docente);
            $stmt->execute();
            $result = $stmt->get_result();
            $docente = $result->fetch_assoc();
            ?>
            <h1 class="text-center mb-4">Perfil del Docente</h1>
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($docente['Nombre'] . ' ' . $docente['Apellido']); ?></h5>
                    <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($docente['Email']); ?></p>
                    <p class="card-text"><strong>Horario:</strong> <?php echo htmlspecialchars($docente['Horario']); ?></p>
                    <a href="?vista=llenar_asistencia&id=<?php echo $docente['Id_Docente']; ?>" class="btn btn-success w-100">Llenar Asistencia</a>
                </div>
            </div>
       
            <?php elseif ($vista == 'llenar_asistencia'): ?>

    <!-- Vista: Llenar Asistencia -->
    <?php
    // Verifica si la sesión ya está iniciada
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    $id_estudiante = $_SESSION['Id_Estudiante'] ?? null; // Carga el Id_Estudiante desde la sesión
    $id_docente = $_SESSION['Id_Docente'] ?? null; // Carga el Id_Estudiante desde la sesión
    $fecha_actual = date("Y-m-d"); // Obtener la fecha actual
    
    ?>
    <h1 class="text-center mb-4">Llenar Asistencia</h1>
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <?php if ($mensaje): ?>
                <div class="alert alert-info" role="alert">
                    <?php echo htmlspecialchars($mensaje); ?>
                </div>
            <?php endif; ?>
            <form method="POST">
                <!-- Fecha actual -->
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="text" name="fecha" class="form-control" id="fecha" value="<?php echo $fecha_actual; ?>" readonly>
                </div>

                <!-- Hora de inicio -->
                <div class="mb-3">
                    <label for="hora_inicio" class="form-label">Hora de Inicio</label>
                    <input type="time" name="hora_inicio" class="form-control" id="hora_inicio" required>
                </div>

                <!-- Hora de fin -->
                <div class="mb-3">
                    <label for="hora_fin" class="form-label">Hora de Fin</label>
                    <input type="time" name="hora_fin" class="form-control" id="hora_fin" required>
                </div>

                <!-- Tema -->
                <div class="mb-3">
                    <label for="tema" class="form-label">Tema</label>
                    <input type="text" name="tema" class="form-control" id="tema" required>
                </div>

                <!-- Salón -->
                <div class="mb-3">
                    <label for="salon" class="form-label">Salón</label>
                    <input type="text" name="salon" class="form-control" id="salon" required>
                </div>

                <!-- Id_Materia -->
                <div class="mb-3">
                    <label for="id_materia" class="form-label">Materia</label>
                    <input type="number" name="id_materia" class="form-control" id="id_materia" required>
                </div>

                <!-- Id_Contenido -->
                <div class="mb-3">
                    <label for="id_contenido" class="form-label">Contenido</label>
                    <input type="number" name="id_contenido" class="form-control" id="id_contenido" required>
                </div>

                <!-- Id_Estudiante (oculto, cargado automáticamente) -->
                <input type="hidden" name="id_estudiante" value="<?php echo $id_estudiante; ?>">

                <!-- Id_Docente (oculto) -->
                <input type="hidden" name="id_docente" value="<?php echo $id_docente; ?>">

                <button type="submit" class="btn btn-success w-100">Registrar Tutoria</button>
            </form>
        </div>
    </div>
<?php endif; ?>

<div class="text-center mt-4">
            <a href="Logout.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>
