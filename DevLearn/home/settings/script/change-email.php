<?php
session_start();
if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['newEmail'])) {
        $newEmail = $_POST['newEmail'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "devlearn";
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $sql = "UPDATE users SET email = '$newEmail' WHERE email = '$email'";
        if ($conn->query($sql) === TRUE) {
            echo '
            <div class="info">
                <div class="info__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path></svg>
                </div>
                <div class="info__title">Tu nombre fue cambiado con exito y se cambiara cuando recargues la pagina</div>
                <div class="info__close"><svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z" fill="#393a37"></path></svg></div>
            </div>';
        } else {
            echo "Error al actualizar el nombre: " . $conn->error;
        }
        $conn->close();
    } else {
        echo "Error: Datos incorrectos recibidos";
    }
} else {
    echo "Error: Sesión no iniciada o usuario no identificado";
}
?>