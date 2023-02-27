<?php

require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $registro = json_encode(array('nombre' => $nombre, 
                                  'apellido' => $apellido, 
                                    'dni' => $dni));
    $redis->hset('student', $id, $registro);
    header('Location: index.php');
    exit();
}
?>

<h1 class="mb-4">Agregar registro</h1>
<form method="POST">
    <div class="form-group">
        <label>ID</label>
        <input type="text" class="form-control" name="id" required>
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" class="form-control" name="apellido" required>
    </div>
    <div class="form-group">
        <label>DNI</label>
        <input type="text" class="form-control" name="dni" required>
    </div>    
    <button type="submit" value="Guardar" class="btn btn-primary mt-3">Agregar</button> 
</form>          

