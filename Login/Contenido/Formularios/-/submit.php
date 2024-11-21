<?php
$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "root"; // Cambia esto a tu usuario de base de datos
$password = ""; // Cambia esto a tu contraseña de base de datos
$dbname = "formulario"; // Cambia esto a tu nombre de base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}





// Obtener datos del formulario
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$lugar = $_POST['lugar'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$escolaridad = $_POST['escolaridad'];
$experiencia = isset($_POST['experiencia']) ? 1 : 0;





// Preparar y ejecutar la consulta
$sql = "INSERT INTO usuarios (fecha, nombre, edad, lugar, fecha_nacimiento, ocupacion, escolaridad) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssissss", $fecha, $nombre, $edad, $lugar, $fecha_nacimiento, $ocupacion, $escolaridad);







if ($stmt->execute()) {
    echo "Registro guardado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
