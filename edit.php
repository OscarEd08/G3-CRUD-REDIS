<?php

require_once 'conexion.php';

$id = $_GET['id'];
$registro = json_decode($redis->hget('student', $id), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $registro = json_encode(array('nombre' => $nombre, 'apellido' => $apellido, 'dni' => $dni));
    $redis->hMset('student', $id, $registro);
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit - Redis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-2">
        <div class="container-fluid p-5 mb-4 bg-dark text-white">
            <h1>CRUD - REDIS</h1>
        </div>
        <div class="container mt-5 mb-5">
            <h1 class="mb-3">Editar registro</h1>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $registro['nombre']; ?>">
                </div>
                <div class="form-group">
                    <label>Apellido:</label>
                    <input type="text" name="apellido" class="form-control" value="<?php echo $registro['apellido']; ?>">
                </div>
                <div class="form-group">
                    <label>DNI:</label>
                    <input type="text" name="dni" class="form-control" value="<?php echo $registro['dni']; ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-3">Actualizar registro</button>
                <a href="index.php" class="btn btn-secondary mt-3">Regresar</a>
            </form>
        </div>
    </div>
</body>
</html>