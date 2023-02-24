<?php
    $ruta = '../';
    require_once '../html/header.html';
    require_once 'funciones.php';

    // 1-a. Controle las variables necesarias, para impedir errores.

 $conexion=conectar();
 if ($conexion && !empty($_GET['id'])){
   $id=$_GET['id'];
    $consulta = 'SELECT * FROM juguetes WHERE id= \''.$id.'\'';
      $resultado=mysqli_query($conexion,$consulta);    
     echo $consulta;
    desconectar ($conexion);
 if(mysqli_num_rows($resultado)>0){
    $fila=mysqli_fetch_array($resultado);
    // 1-b. Realice lo necesario para mostrar en el formulario 
    // los datos del producto seleccionado en index.php 
?>

<main>
    <section>
        <article>

<form action="modificar_ok.php" method="post" enctype="multipart/form-data">
    <legend>Modificar datos</legend>
    <section>
        <label for="lbldesc">Descripción: </label>
        <input type="text" name="descripcion" value="<?php echo $fila['descripcion'];?>" maxlength="100">
    </section>
    <section>
        <label for="lblprecio">Precio: </label>
        <input type="text" name="precio" value="<?php echo $fila['precio'];?>"  min="0" step="0.01" id="lblprecio" >
    </section>
    <section>
        <label for="lblfoto">Foto: </label>
        
        <input type="file" name="foto" accept="image/*">
    </section>
    <figure>
            <img src="../img/<?php echo $fila['foto'];?>">
        </figure>
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
    <input type="submit" value="Modificar">
</form>
        </article>
    </section>

<?php
                }
            } else {
                echo '<p>No se pudo hacer la consulta</p>';
            }

    //     }
    // }

?>

<?php
    require_once '../html/footer.html';
?>