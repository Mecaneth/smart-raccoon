<?php
$servername = "localhost";
$username = "root"; // Por defecto en XAMPP
$password = ""; // Por defecto en XAMPP no hay contraseña
$dbname = "usuarios";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener todos los usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre de usuario: " . $row["username"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>