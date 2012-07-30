<?php
    include("../../php/conexion.php");

    // Columnas de
    $grupo_id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $region = $_POST['region'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $domicilio = $_POST['domicilio'];
    $hobbies = $_POST['hobbies'];
    $id = $grupo_id;

    // Ruta donde se guardarán las imágenes
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/admin/ganadores/imagenes_ganadores/';
    
    // Recibo los datos de la imagen
    $nombre_img = $_FILES['imagen']['name'];
    //$tipo = $_FILES['imagen']['type'];
    $tmpname = $_FILES['imagen']['tmp_name'];

    // Muevo la imagen desde su ubicación
    // temporal al directorio definitivo
    move_uploaded_file($tmpname,$directorio.$nombre_img);
    //copy($tmpname, $directorio.$nombre);
    
    $directorio = str_replace("home/mundore/domains/mundore.com.mx/public_html/", "", $directorio);

    // Guardamos en la BBDD
    $sql = "INSERT INTO ganadores (grupo_id, nombre, puesto, ciudad, estado, region, fecha_ingreso, fecha_nacimiento, domicilio, hobbies, imagen) VALUES ('$grupo_id', '$nombre', '$puesto', '$ciudad', '$estado', '$region', '$fecha_ingreso', '$fecha_nacimiento', '$domicilio', '$hobbies', '$directorio$nombre_img')";
    $resultado = $mysqli->query($sql);

    echo "Registro guardado exitosamente </br>";
    echo "<a href='admin_ganadores.php?id=".$id."'><input type='button' id='ejecuta' value='Agregar mas registros' /></a>";

    // Por si queremos la ID asignada a la imagen
    #$id = mysql_insert_id();
 
?>
