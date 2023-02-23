<?php /* NO CORREGIR - Este archivo fue provisto por la cátedra */ 
    $ruta = '';
    require_once 'html/header.html';
    require_once 'php/funciones.php';
    $conexion = conectar();
    if ($conexion) {
        $sql = 'SELECT * FROM juguetes';
        $query = mysqli_query($conexion, $sql);
        desconectar($conexion);
        if ($query) {
            $filas = mysqli_num_rows($query);
            if ($filas > 0) {
                echo '<table>
                        <thead>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Foto</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>';
                while ($linea = mysqli_fetch_array($query)) {
                    echo '<tr>';
                    echo '<td>' . $linea['descripcion'] . '</td>';
                    echo '<td>' . $linea['precio'] . '</td>';
                    echo '<td><img src="img/' . $linea['foto'] . '"></td>';
                    echo '<td><a href="php/modificar.php?id=' .  $linea['id'] . '">Modificar</a></td>';
                    echo '<td><a href="php/eliminar.php?id=' .  $linea['id'] . '">Eliminar</a></td>';
                    echo '</tr>';
                }

                echo '</tbody></table>';
            } else {
                echo '<p>La consulta no arrojó resultados</p>';
            }
            
        } else {
            echo '<p>No se pudo hacer la consulta</p>';
        }

    } else {
        echo '<p>Error al conectar</p>';
    }
    require_once 'html/footer.html';
?>