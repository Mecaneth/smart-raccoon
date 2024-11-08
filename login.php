<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (username, password) 
    VALUES ('$user', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        header("Location: primero.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>