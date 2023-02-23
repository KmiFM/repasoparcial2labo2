<?php

// REPASO MANEJO DE TEXTOS 
// CASO 1 escribir en un archivo algo ingresado en un form 

require_once ' html/...';
// si no esta vacio el form 
if(!empty($_POST['blabla'])){
    // la linea sera lo del form separado por punto y coma
    $linea= implode(';',$_POST);
    $carpeta= '../txt';
    // si la carpeta no existe creala
    if(!file_exists(($carpeta))){
    mkdir($carpeta);
    }
}
// el nombre del archivo sera 
$nombre = 'inscripcion.txt';
// abrimos el archivo para poder escribir en él
$archivo = fopen($carpeta.$nombre, 'a');
// escribimos en el archivo la linea que formamos 
fputs($archivo, $linea . PHP_EOL);
// cerramos el archivo
fclose($archivo);
?>

<?php
// Caso 2 donde abrimos el archivo para mostrarlo en pantalla a su contenido 

// abrimos el archivo para que lea 
$archivo = fopen($carpeta.$nombre, 'r');
// mientras que no sea el final del archivo hacer 
while(!feof($archivo)){
    // obtenemos linea por linea el archivo 
    $linea = fgets ($archivo);
    // si la linea no esta vacia 
    if($linea !=''){
        // separemos la linea como un array 
        $separar = explode (';', $linea);
    }
    
}else{
    echo 'no hay nada que mostrar';
}
// mostramos el contenido del texto como queramos, por ejemplo

echo $separar[1]; 
// nos mostrara el segundo componente de la linea que ahora la hicimos array  

// y cerramos el archivo 

fclose($archivo);
?>

<?php
// Como guardar y mover archivos 
// para poder subir archivos en el form debemos poner en el input el tipo file 
?>
<!-- recordar siempre qque en method va POST  -->
<form action="procesar.php" method="post" enctype="multipart/form-data">
<input type='file' name= ' foto'>
</form>
<?php
// cuando subimos archivos tenemos claves dentro del array $_FILES 
// name será el nombre del archivo, por ejemplo cami.png sera de nombre cami 
// type es el tipo de archivo y formato ejemplo img/png 
// tmp_name es la ubicacion temporal que le da el servidor
// y al ultimo size que es el tamaño en bytes 
// entonces por ejemplo si el input dice type = file y el name ='foto' sera para acceder a ese archivo que deberemos escribir 
$_FILES['foto']['name'] = $nombreArchivo;
// y eso nos dará de respuesta $nombreArchivo=cami.png

// ahora como movemos el archivo a nuestro servidor?
$envio= move_uploaded_file($origen,$destino);
$origen = $_FILES['foto']['temp_name'];
// obtenemos el formato del archivo 
$formato = explode('.',$nombreArchivo);
$destino= '../img/'.$nombreArchivo.'.'.$formato[1];
?>
<?php
// Manejo de fechas y horas 
?>
