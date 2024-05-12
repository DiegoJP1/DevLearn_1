<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1714661861/pliw7bitncliod7vbpb5.png" type="image/x-icon">
    <title>DevLearn | Cursos</title>
</head>
<body>
<div class="bg"></div>
<nav>
	<a href=""><span class="material-symbols-outlined">
arrow_back_ios_new
</span></a>
</nav>
<div class="dashboard">

	<div class="card profile" style="grid-area: 1/1/2/3">
		<h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;hola <?php 
      session_start();
                if(isset($_SESSION['user'])) {
                  $correo = $_SESSION['user'];
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "devlearn";

                  $conn = new mysqli($servername, $username, $password, $database);
                  if ($conn->connect_error) {
                      die("Conexión fallida: " . $conn->connect_error);
                  }
                  $sql = "SELECT name FROM users WHERE email = '$correo'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      $nombre = $row["name"];
                  } else {
                    header("Location: http://localhost/DevLearn/core/security/");
                  }
                  $result->free();
                  $conn->close();
                } else {
                    header("Location: http://localhost/DevLearn/core/security/");
                    exit();
                }
                echo $nombre
                ?> </h2>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¡es hora de aprender!</p>

	</div>

	<div class="card" style="grid-area: 2/1/3/3">
    <br> <br>
		<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esto es lo mas nuevo
            </h2>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Que te preparamos</p>
	</div>

	<div class="card" style="grid-area: span 2 / span 2">
    &nbsp;<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crea VideoJuegos</h2>
    <h4>&nbsp;&nbsp;&nbsp;Crea tu propio universo desde cero &nbsp;&nbsp;&nbsp;y compartelo con el mundo facil y &nbsp;&nbsp;divertido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
    <ul>
        <h4>requisitos</h4>
        <li>Tener Computadora</li>
        <li>No se requieren conocimientos previos</li>
    </ul>
    <button>
    <a href="http://localhost/DevLearn/home/services/games/">Ver mas</a>
</button>
	</div>

	

    <div class="card" style="grid-area: span 2 / span 2">
    &nbsp;<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programa y comprende la IA</h2>
    <h4>&nbsp;&nbsp;&nbsp;Comprende la gran magia detras de &nbsp;&nbsp;&nbsp; la IA con nosotros y crea tu propia &nbsp;&nbsp;&nbsp;IA desde cero</h4>
    <ul>
        <h4>requisitos</h4>
        <li>Computadora</li>
        <li>No se requieren conocimientos previos</li>
    </ul>
    <button>
    <a href="">Ver mas</a>
</button>
	</div>

    <div class="card" style="grid-area: span 2 / span 2">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crea paginas web y &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aplicaciones moviles</h2>
    <h4>&nbsp;&nbsp;&nbsp;Crea una nueva obra de arte donde &nbsp;&nbsp;&nbsp;inicia un nuevo mundo de diseño sin &nbsp;&nbsp;&nbsp;limites</h4>
    <ul>
        <h4>requisitos</h4>
        <li>Tener Computadora</li>
        <li>No se requieren conocimientos previos</li>
    </ul>
    <button>
        <a href="">Ver mas</a>

</button>
	</div>

    

</div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/e267099c50.js" crossorigin="anonymous"></script>

</body>
<style>
    button {
  align-items: center;
  background-color: transparent;
  color: #fff;
  cursor: pointer;
  display: flex;
  font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1rem;
  font-weight: 700;
  line-height: 1.5;
  text-decoration: none;
  text-transform: uppercase;
  outline: 0;
  border: 0;
  padding: 1rem;
}

button:before {
  background-color: #fff;
  content: "";
  display: inline-block;
  height: 1px;
  margin-right: 10px;
  transition: all .42s cubic-bezier(.25,.8,.25,1);
  width: 0;
}

button:hover:before {
  background-color: #fff;
  width: 3rem;
}
a{
    text-decoration: none;
    color: white;
}
</style>
</html>