<?php
include 'connection.php';

session_start();

if (!isset($_SESSION['user'])) {
    die("No hay una sesión activa. Inicia sesión para continuar.");
}

$user = $_SESSION['user'];
$email = $user['email'];

function generarMatricula() {
    $longitud = 8;
    $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $matricula = '';

    for ($i = 0; $i < $longitud; $i++) {
        $matricula .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $matricula;
}

do {
    $matricula = generarMatricula();
    $sql_check_matricula = "SELECT matricula FROM users WHERE email = '$email'";
    $result_check_matricula = run_query($sql_check_matricula);
} while ($result_check_matricula->num_rows > 0);

$sql_insert = "INSERT INTO (email, matricula) VALUES ('$email', '$matricula')";

if (insert_data($sql_insert)) {
    echo "Matrícula generada y guardada para el usuario con email: $email";
} else {
    echo "Error al guardar la matrícula.";
}

$conn->close();
?>