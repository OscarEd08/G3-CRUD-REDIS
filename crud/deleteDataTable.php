<?php
    require_once '../conexion.php';

    $keys = $redis->hKeys('student'); // obtener todas las keys del hash
    foreach($keys as $key) {
        $redis->hDel('student', $key); // eliminar cada key del hash
    }

    header('Location: ../index.php');
    exit();
?>