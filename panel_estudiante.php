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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <?php $id_docente = intval($_GET['id']); ?>
            <h1 class="text-center mb-4">Llenar Asistencia</h1>
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <?php if ($mensaje): ?>
                        <div class="alert alert-info" role="alert">
                            <?php echo htmlspecialchars($mensaje); ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST">
                        <input type="hidden" name="id_docente" value="<?php echo $id_docente; ?>">
                        <div class="mb-3">
                            <label for="id_estudiante" class="form-label">ID del Estudiante</label>
                            <input type="text" name="id_estudiante" class="form-control" id="id_estudiante" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Registrar Asistencia</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>
