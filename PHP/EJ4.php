<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    
    // Ruta donde se almacenará la imagen
    $directorioDestino = "uploads/";

    // Nombre del archivo
    $nombreArchivo = basename($_FILES["imagen"]["name"]);
    $rutaArchivo = $directorioDestino . $nombreArchivo;
    
    // Mover el archivo subido al directorio de destino
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaArchivo)) {
        // Mostrar la imagen y el nombre de usuario
        echo "<!DOCTYPE html>
        <html>
        <head>
          <title>Perfil de Usuario</title>
        </head>
        <body>
          <h2>Perfil de Usuario</h2>
          <img src='$rutaArchivo' alt='Imagen de Perfil' width='200'><br>
          <p>Nombre: $nombre</p>
        </body>
        </html>";
    } else {
        echo "Error al subir el archivo.";
    }
}
?>
