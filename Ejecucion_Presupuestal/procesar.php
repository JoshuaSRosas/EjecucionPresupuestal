<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados desde el formulario
    $opcion = $_POST['opcion'];
    $archivo_nombre = $_FILES['archivo']['name'];
    $archivo_temporal = $_FILES['archivo']['tmp_name'];

    // Mover el archivo subido a una ubicación deseada
    $directorio_destino = 'ruta/directorio/destino/'; // Establece la ruta y el directorio de destino
    $archivo_destino = $directorio_destino . $archivo_nombre;
    
    if (move_uploaded_file($archivo_temporal, $archivo_destino)) {
        // El archivo se ha movido correctamente, puedes realizar las operaciones deseadas
        
        // Por ejemplo, mostrar los datos recibidos y la ubicación del archivo
        echo "Opción seleccionada: " . $opcion . "<br>";
        echo "Archivo subido: " . $archivo_nombre . "<br>";
        echo "Ubicación del archivo: " . $archivo_destino . "<br>";
    } else {
        // Ocurrió un error al mover el archivo
        echo "Error al subir el archivo.";
    }
}
?>