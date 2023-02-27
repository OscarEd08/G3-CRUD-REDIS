<?php
    require_once 'conexion.php';
    $id = $_GET['id'];
    $redis->hdel('student',$id);
    header('Location: index.php');
    exit();
?>