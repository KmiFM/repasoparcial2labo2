<?php
    $ruta = '../';
    require_once '../html/header.html';
    require_once 'funciones.php';
?>
<form action="reservar.php" method="post">
    <section>
        <label for="lblevento">Evento:</label>
        <select name="evento" id="lblevento">
            <option value="Gordillo">Gordillo</option>
            <option value="Amato">El Loco Amato</option>
            <option value="Chicas">Las Chicas de la Culpa</option>
        </select>
    </section>
    <input type="submit" value="Aceptar">
</form>

<?php
    require_once '../html/footer.html';
?>