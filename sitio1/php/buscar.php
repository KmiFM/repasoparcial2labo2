<?php
    $ruta = '../';
    require_once '../html/header.html';
    require_once 'funciones.php';

    // 4- Deberá utilizar el dato del formulario, 
    // de modo que al presionar el botón, 
    // sólo se muestren los juguetes cuya descripción sea "similar"
    //  a lo ingresado. 
    // Los datos deberán aparecer cada uno en un article diferente. 
    // Se sugiere utilizar la clase contenedor-article.

?>
<form action="" method="get">
    <section>
        <label for="lblque">Qué buscar</label>
        <input type="search" id="lblque" name="buscar">
    </section>
    <input type="submit" value="Buscar">
</form>

<?php
    require_once '../html/footer.html';
?>