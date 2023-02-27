<table class="table">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th class="table-active">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once 'conexion.php';

        $registro = $redis->hGetAll('student');

        foreach ($registro as $id => $registro) {
            $registro = json_decode($registro, true);
            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $registro['nombre'] . '</td>';
            echo '<td>' . $registro['apellido'] . '</td>';
            echo '<td>' . $registro['dni'] . '</td>';
            echo '<td>
                    <a href="crud/edit.php?id=' . $id  . '" class="btn btn-info btn-sm me-3 fs-6 text-white">Editar</a>
                    <a href="crud/delete.php?id=' . $id  . '" class="btn btn-danger btn-sm ms-3 fs-6">Eliminar</a></td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>