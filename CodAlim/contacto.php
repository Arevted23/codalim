<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<form class="formulario padding" action="">
    <fieldset>
        <legend>Contactanos</legend>
        <label for="" >Nombre: </label>
        <input type="text">
        <label for="">Apellido: </label>
        <input type="text">
        <label for="">Numero de Contacto: </label>
        <input type="number">
        <label for="">Empresa: </label>
        <input type="text">
        <label for="">Mensaje:</label>
        <textarea name="" id="" cols="1" rows="1"></textarea>
    </fieldset>
    <input class="boton" type="submit" value="Enviar">
</form>

<?php
incluirTemplate('footer')
?>