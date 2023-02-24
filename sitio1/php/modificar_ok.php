<?php
    require_once 'funciones.php';
    // 2. realizar lo necesario para que 
    // los cambios se guarden en la base de datos
$conexion = conectar();

if($conexion && !empty($_POST['id'])){
   
    $id=$_POST['id'];
    $consulta = 'UPDATE juguetes SET descripcion=\''.$_POST['descripcion'].'\', precio=\''.$_POST['precio'].'\' WHERE id=\'' .$id.'\'';
    echo $consulta;
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        echo '<p>Actualizacion Exitosa</p>';
    }else{
        echo '<p> Actualizacion fallida </p>';
    }
}

    // 3. realice lo necesario para poder subir la imagen al servidor, 
    // a la carpeta img. No requiere eliminar una imagen anterior. 
    // Controlar que si no se envía imagen, 
    // no se modifique la base de datos.


?>