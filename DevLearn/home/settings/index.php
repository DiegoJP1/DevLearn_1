<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <script src="script/main.js"></script>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1714661861/pliw7bitncliod7vbpb5.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>DevLearn</title>
</head>
<body>
  <div id="messagesContainer"></div>
<div class="layout3">
<div class="app-container">
  <div class="app-header">
    <div class="app-header-left">
      <span class="app-icon"></span>
      <p class="app-name">Configuracion</p>
    </div>
    <div class="app-header-right">
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
      <button class="profile-btn">
      <span class="material-symbols-outlined">
account_circle
</span>
       &nbsp;
      <span><?php 
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
                ?></span>
      </button>
    </div>
    <button class="messages-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>
    </button>
  </div>
  <div class="app-content">
    <div class="app-sidebar">
      <a class="app-sidebar-link" id="changetolayout1" href="http://localhost/DevLearn/home/">
      <span class="material-symbols-outlined">
home_app_logo
</span>
      </a>
      <a href="http://localhost/DevLearn/home/core/auth/" class="app-sidebar-link">
      <span class="material-symbols-outlined">
code
</span>
      </a>
      <a id="changetolayout2" class="app-sidebar-link" href="http://localhost/DevLearn/home/">
      <span class="material-symbols-outlined">
category
</span>
      </a>
      <a  class="app-sidebar-link active">
      <span class="material-symbols-outlined">
settings
</span>
      </a>
    </div>
    <div class="projects-section" id="courses-layout">
      <div class="projects-section-header">
        <p>Configuraciones de Cursos</p>
        <p class="time"><?php
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'esp');
        $fecha_actual = strftime("%d de %B");

echo $fecha_actual;
?></p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-type"><a>cursos</a></span>
          </div>
          <div class="item-status">
            <span class="status-type"><a id="privacy-btn">Privacidad</a></span>
          </div>
          <div class="item-status">
            <span class="status-type"><a id="user-btn">Usuario</a></span>
          </div>
        </div>
      </div>
      <div class="project-boxes jsGridView">
      <div class="card-2" id="card-1">
        <div class="card-content">
<div class="setting">
  <h2>Notificaciones</h2>
  <p>Te avisamos cuando tengas una clase o trabajo pendiente</p>
 <div class="switch1">
 <label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
</label>
 </div>
</div>
<div class="setting">
  <h2>Envio Automatico (IDE)</h2>
  <p>en el IDE (entorno de desarrollo integrado) tu progreso al dar guardar sera enviado automaticamente a revision</p>
 <div class="switch2">
 <label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
</label>
 </div>
</div>
<div class="setting">
  <h2>Seguimiento de proceso por IA</h2>
  <p>Nuestra IA (inteligencia artificial) llevara un control de tu progreso en todos los cursos</p>
 <div class="switch2">
 <label class="switch">
    <input type="checkbox" checked>
    <span class="slider"></span>
</label>
 </div>
</div>
<div class="setting">
  <h2>Revision de codigo por IA (IDE) (beta)</h2>
  <p>Nuestra IA (inteligencia artificial) Revisara autonomamente tu codigo de manera rapida  (Aviso: La IA puede cometer errores al revisar el codigo)</p>
 <div class="switch2">
 <label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
</label>
 </div>
</div>
</div>
        </div>
      </div>
  </div>
  <div class="projects-section" id="privacy-layout">
      <div class="projects-section-header">
        <p>Configuraciones de Privacidad</p>
        <p class="time"><?php
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'esp');
        $fecha_actual = strftime("%d de %B");

echo $fecha_actual;
?></p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-type"><a id="courses-btn">cursos</a></span>
          </div>
          <div class="item-status">
            <span class="status-type"><a>Privacidad</a></span>
          </div>
          <div class="item-status">
            <span class="status-type"><a id="user-btn">Usuario</a></span>
          </div>
        </div>
      </div>
      <div class="project-boxes jsGridView">
      <div class="card-2" id="card-1">
        <div class="card-content">
<div class="setting">
  <h2>Registro de Actividad</h2>
  <p>Tomamos tu registro de actividad para mejorar nuestros servicios</p>
 <div class="switch1">
 <label class="switch">
    <input type="checkbox" checked>
    <span class="slider"></span>
</label>
 </div>
</div>
<div class="setting">
  <h2>datos sobre IA</h2>
  <p>Extraemos los datos sobre el uso de nuestra IA</p>
 <div class="switch2">
 <label class="switch">
    <input type="checkbox" checked>
    <span class="slider"></span>
</label>
 </div>
</div>
<div class="setting">
  <h2>compartir datos con profesores</h2>
  <p>Compartimos datos como tu nombre,nacionalidad y gustos con tus profesores para una mejor experiencia</p>
 <div class="switch2">
 <label class="switch">
    <input type="checkbox" checked>
    <span class="slider"></span>
</label>
 </div>
</div>
</div>
        </div>
      </div>
  </div>
  <div class="projects-section" id="user-layout">
      <div class="projects-section-header">
        <p>Configuraciones de Usuario</p>
        <p class="time"><?php
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'esp');
        $fecha_actual = strftime("%d de %B");

echo $fecha_actual;
?></p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-type"><a id="courses-btn">cursos</a></span>
          </div>
          <div class="item-status">
            <span class="status-type"><a id="privacy-btn">Privacidad</a></span>
          </div>
          <div class="item-status">
            <span class="status-type"><a>Usuario</a></span>
          </div>
        </div>
      </div>
      <div class="project-boxes jsGridView">
      <div class="card-2" id="card-1">
        <div class="card-content">
<div class="setting">
  <h2>Cambiar Nombre</h2>
  <p>Usamos Tu nombre para mostrarlo en chats,con fines esteticos y para dirigirnos facilmente hacia ti (Requiere Recargar la pagina)</p>
 <div class="switch1">
 <button class="Btn" onclick="toggleNameChange()">
  Editar
  <svg viewBox="0 0 512 512" class="svg">
    <path
      d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
    ></path>
  </svg>
</button>

 </div>
</div>
<div class="setting">
  <h2>Cambiar Correo Electronico</h2>
  <p>Usamos tu correo electronico para fines de seguridad y para enviar certificados y avisos  (Requiere Recargar la pagina)</p>
 <div class="switch2">
 <button class="Btn" onclick="toggleEmailChange()">
  Editar
  <svg viewBox="0 0 512 512" class="svg">
    <path
      d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
    ></path>
  </svg>
</button>
 </div>
</div>
<div class="setting">
  <h2>Matricula</h2>
  <p>usamos tu matricula como identificador para tu usuario y darte de alta en nuestro sistema</p>
  <div class="switch2">
    <?php 
    if (isset($_SESSION['user'])) {
        $correo = $_SESSION['user'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "devlearn";

        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
        $sql = "SELECT matricula FROM users WHERE email = '$correo'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $matricula = $row["matricula"];
        } else {
            echo "ERROR: hubo un error al cargar tu matrícula. Contacta a Stephanie y proporciona el código de error 407.";
        }
        $result->free();
        $conn->close();
    } else {
        header("Location: http://localhost/DevLearn/core/security/");
        exit();
    }
    ?>
    <?php echo $matricula; ?>
    <div class="copy-box">
        <div class="centralize">
            <div>
                <button id="copymat" onclick="copyMatricula()">
                    <span>
                        <svg viewBox="0 0 467 512.22" fill="#0E418F" height="12" width="12">
                            <path d="M131.07 372.11c.37 1 .57 2.08.57 3.2 0 1.13-.2 2.21-.57 3.21v75.91c0 10.74 4.41 20.53 11.5 27.62s16.87 11.49 27.62 11.49h239.02c10.75 0 20.53-4.4 27.62-11.49s11.49-16.88 11.49-27.62V152.42c0-10.55-4.21-20.15-11.02-27.18l-.47-.43c-7.09-7.09-16.87-11.5-27.62-11.5H170.19c-10.75 0-20.53 4.41-27.62 11.5s-11.5 16.87-11.5 27.61v219.69zm-18.67 12.54H57.23c-15.82 0-30.1-6.58-40.45-17.11C6.41 356.97 0 342.4 0 326.52V57.79c0-15.86 6.5-30.3 16.97-40.78l.04-.04C27.51 6.49 41.94 0 57.79 0h243.63c15.87 0 30.3 6.51 40.77 16.98l.03.03c10.48 10.48 16.99 24.93 16.99 40.78v36.85h50c15.9 0 30.36 6.5 40.82 16.96l.54.58c10.15 10.44 16.43 24.66 16.43 40.24v302.01c0 15.9-6.5 30.36-16.96 40.82-10.47 10.47-24.93 16.97-40.83 16.97H170.19c-15.9 0-30.35-6.5-40.82-16.97-10.47-10.46-16.97-24.92-16.97-40.82v-69.78zM340.54 94.64V57.79c0-10.74-4.41-20.53-11.5-27.63-7.09-7.08-16.86-11.48-27.62-11.48H57.79c-10.78 0-20.56 4.38-27.62 11.45l-.04.04c-7.06 7.06-11.45 16.84-11.45 27.62v268.73c0 10.86 4.34 20.79 11.38 27.97 6.95 7.07 16.54 11.49 27.17 11.49h55.17V152.42c0-15.9 6.5-30.35 16.97-40.82 10.47-10.47 24.92-16.96 40.82-16.96h170.35z" fill-rule="nonzero"></path>
                        </svg> <span id="copyButtonText">Copiar</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function copyMatricula() {
        var matricula = '<?php echo $matricula; ?>';
        var tempInput = document.createElement("input");
        tempInput.value = matricula;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        var copyButton = document.getElementById("copymat");
        var copyButtonText = document.getElementById("copyButtonText");
        copyButtonText.textContent = "Copiado";
        copyButton.disabled = true;
        setTimeout(function() {
            copyButtonText.textContent = "Copiar";
            copyButton.disabled = false;
        }, 3000);
    }
</script>
</div>
</div>
</div>
</div>
</div>
 </div>
</div>
</div>
        </div>
      </div>
  </div>
</div>
</div>
</div>
<div id="nameChangeCard" class="card" style="display: none;">
    <h2 class="card-header">Cambiar Nombre</h2>
    <div class="card-body">
        <form id="nameChangeForm" onsubmit="return updateName()">
            <input type="text" id="newNameInput" class="form-control" placeholder="Ingrese el nuevo nombre"><br>
            <button type="submit" class="button"> <span class="button-content">Aceptar</span></button>
            &nbsp;
            &nbsp;
            &nbsp;
            <button type="button" class="button" onclick="toggleNameChange()"> <span class="button-content">Cancelar</span></button>
        </form>
    </div>
</div>
<div id="EmailChangeCard" class="card" style="display: none;">
    <h2 class="card-header">Cambiar Correo Electronico</h2>
    <p>correo actual: <?php 
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
                  $sql = "SELECT email FROM users WHERE email = '$correo'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      $nombre = $row["email"];
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
                ?></p>
    <div class="card-body">
        <form id="nameChangeForm" onsubmit="return updateEmail()">
            <input type="text" id="newEmailInput" class="form-control" placeholder="Ingrese el nuevo Correo Electronico"><br>
            <button type="submit" class="button"> <span class="button-content">Aceptar</span></button>
            &nbsp;
            &nbsp;
            &nbsp;
            <button type="button" class="button" onclick="toggleEmailChange()"> <span class="button-content">Cancelar</span></button>
        </form>
    </div>
</div>
</body>
<script>
  let sectionCourses,sectionPrivacy,sectionUser,coursesButton,userButton,privacyButton
  document.addEventListener('DOMContentLoaded', function() {
             privacyButton = document.getElementById('privacy-btn');
             userButton = document.getElementById('user-btn');
             coursesButton = document.getElementById("courses-btn");
             sectionCourses = document.getElementById("courses-layout");
             sectionPrivacy = document.getElementById('privacy-layout');
            sectionUser = document.getElementById('user-layout');

            privacyButton.addEventListener('click', function() {
                sectionPrivacy.style.display = "block";
                sectionUser.style.display = "none";
                sectionCourses.style.display = "none";
            });

            userButton.addEventListener('click', function() {
                sectionPrivacy.style.display = "none";
                sectionUser.style.display = "block";
                sectionCourses.style.display = "none";
            });

            coursesButton.addEventListener("click", function() {
                sectionPrivacy.style.display = "none";
                sectionUser.style.display = "none";
                sectionCourses.style.display = "block";
                
            });
        });
        
</script>

<script>
function updateName() {
    var newName = document.getElementById('newNameInput').value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "script/change-name.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            if (response.trim() === "success") {
                showSuccessMessage();
            } else {
              showSuccessMessage();
            }
        }
    };
    xhr.send("newName=" + encodeURIComponent(newName));
    return false;
}

function showSuccessMessage() {
    var infoDiv = document.createElement("div");
    infoDiv.className = "info";
    infoDiv.innerHTML = `
        <div class="info__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                <path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path>
            </svg>
        </div>
        <div class="info__title">Tu nombre fue cambiado con éxito y se actualizará al recargar la página</div>
        <div class="info__close">
            <svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z" fill="#393a37"></path>
            </svg>
        </div>
    `;
    var messagesContainer = document.getElementById("messagesContainer");
    messagesContainer.appendChild(infoDiv);
}

function toggleNameChange() {
    var card = document.getElementById('nameChangeCard');
    if (card.style.display === 'none') {
        card.style.display = 'block';
    } else {
        card.style.display = 'none';
    }
}
</script>
<script>
  function updateEmail() {
    var newName = document.getElementById('newEmailInput').value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "script/change-email.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            if (response.trim() === "success") {
                showSuccessMessage();
            } else {
              showSuccessMessage();
            }
        }
    };
    xhr.send("newEmail=" + encodeURIComponent(newName));
    return false;
}

function showSuccessMessage() {
    var infoDiv = document.createElement("div");
    infoDiv.className = "info";
    infoDiv.innerHTML = `
        <div class="info__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                <path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path>
            </svg>
        </div>
        <div class="info__title">Tu nombre fue cambiado con éxito y se actualizará al recargar la página</div>
        <div class="info__close">
            <svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z" fill="#393a37"></path>
            </svg>
        </div>
    `;
    var messagesContainer = document.getElementById("messagesContainer");
    messagesContainer.appendChild(infoDiv);
}

function toggleEmailChange() {
    var card = document.getElementById('EmailChangeCard');
    if (card.style.display === 'none') {
        card.style.display = 'block';
    } else {
        card.style.display = 'none';
    }
}
</script>
<style>
#privacy-layout{
  display: none;
}
#user-layout{
  display: none;
}
.copy-box button {
  background-color: #F2F7FA;
  width: 100px;
  height: 30px;
  border: none;
  border-radius: 10px;
  font-weight: 600;
  overflow: hidden;
  transition-duration: 700ms;
}
.copy-box button span:first-child {
  color: #0E418F;
  position: absolute;
  transform: translate(-50%, -50%)
}

.centralize {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.description {
  margin-top: 10px;
  color: #B5CCF3;
}
.card-content .Btn {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 100px;
  height: 40px;
  border: none;
  padding: 0px 20px;
  background-color: black;
  color: white;
  font-weight: 700;
  cursor: pointer;
  border-radius: 10px;
  box-shadow: 5px 5px 0px black;
  transition-duration: 0.3s;
}

.card-content .svg {
  width: 13px;
  position: absolute;
  right: 0;
  margin-right: 20px;
  fill: white;
  transition-duration: 0.3s;
}

.card-content .Btn:hover {
  color: transparent;
}

.card-content .Btn:hover svg {
  right: 43%;
  margin: 0;
  padding: 0;
  border: none;
  transition-duration: 0.3s;
}

.card-content .Btn:active {
  transform: translate(3px, 3px);
  transition-duration: 0.3s;
  box-shadow: 2px 2px 0px white;
}

.card {
  position: absolute;
  top: 30%;
  width: 400px;
  background-color: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 10px;
  margin: 20px;
  height: 200px;

}
.card h2 .dark:root,p,h3 .dark:root{
  color: var(--secondary-color);
  z-index: 9999999999999999;
}
.card-header h2 .dark:root{
  color: var(--secondary-color);
  z-index: 9999999999999999;
}
.card input{
  width: 80%;
    padding: 10px;
    margin-bottom: 15px;
}

.card-header {
  font-size: 24px;
  text-align: center;
  margin-bottom: 20px;
}

.card-body {
  text-align: center;
}

.btn {
  padding: 8px 16px;
  margin-right: 10px;
}
.button {
  position: relative;
  overflow: hidden;
  height: 2rem;
  padding: 0 2rem;
  border-radius: 1.5rem;
  background: #3d3a4e;
  background-size: 400%;
  color: #fff;
  border: none;
  cursor: pointer;
}

.button:hover::before {
  transform: scaleX(1);
}

.button-content {
  position: relative;
  z-index: 1;
}

.button::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  transform: scaleX(0);
  transform-origin: 0 50%;
  width: 100%;
  height: inherit;
  border-radius: inherit;
  background: linear-gradient(
    82.3deg,
    rgba(150, 93, 233, 1) 10.8%,
    rgba(99, 88, 238, 1) 94.3%
  );
  transition: all 0.475s;
}
.info {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  width: 320px;
  padding: 12px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: start;
  background: #509AF8;
  border-radius: 8px;
  box-shadow: 0px 0px 5px -3px #111;
}

.info__icon {
  width: 20px;
  height: 20px;
  transform: translateY(-2px);
  margin-right: 8px;
}

.info__icon path {
  fill: #fff;
}

.info__title {
  font-weight: 500;
  font-size: 14px;
  color: #fff;
}

.info__close {
  width: 20px;
  height: 20px;
  cursor: pointer;
  margin-left: auto;
}

.info__close path {
  fill: #fff;
}
#messagesContainer{
  position: absolute;
  bottom: 100%;
  left: 40%;
}
.dark:root{
    --app-container:  hsl(0 0% 2%);
  --app-container:  hsl(0 0% 2%);
  --projects-section:hsl(0 0% 2%) ;
  }
  :root{
    --projects-section:hsl(100% 0% 0%) ;
  }
  p .dark:root{
    color: var(--secondary-color);
  }
  

</style>
</html>