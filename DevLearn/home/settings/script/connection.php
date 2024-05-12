<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devlearn";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
function run_query($sql) {
    global $conn;
    $result = $conn->query($sql);
    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }
    return $result;
}

function insert_data($sql) {
    global $conn;
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        die("Error al insertar datos: " . $conn->error);
    }
}
function get_last_insert_id() {
    global $conn;
    return $conn->insert_id;
}
?>
