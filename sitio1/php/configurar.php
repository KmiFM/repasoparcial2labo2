<?php
    $ruta = '../';
    require_once '../html/header.html';
    require_once 'funciones.php';
?>
<form action="configurar_ok.php" method="post">
    <section>
        <label for="lblmodo">Modo</label>
        <select name="modo" id="lblmodo">
            <option value="nocturno">Nocturno</option>
            <option value="diurno">Diurno</option>
        </select>
    </section>
    <input type="submit" value="Aceptar">
</form>

<?php
    require_once '../html/footer.html';
?>