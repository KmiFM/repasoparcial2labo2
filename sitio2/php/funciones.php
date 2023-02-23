<?php /* NO CORREGIR - Este archivo fue provisto por la cátedra */

function conectar ()
{
    $servidor = 'localhost'; // modificar segun corresponda la configuracion local de su MySQL
    $usuario = 'root';
    $clave = '';
    $db = 'repaso';
    $conexion = mysqli_connect($servidor, $usuario, $clave, $db);
    return $conexion; 
}

function desconectar ($conexion)
{
    if ($conexion) {
        $estado = mysqli_close($conexion);
    }
}

?>