<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/cards.css">
    <script src="script/main.js"></script>
    <script>let layout1, layout2, layout3 , card_layout1,card_layout2;

document.addEventListener("DOMContentLoaded", () => {
  layout1 = document.querySelector(".layout1");
  layout2 = document.querySelector(".layout2");
  layout3 = document.getElementById("card-layout1");
  
  const ch3btn = document.getElementById("changetolayout3");
  const ch2btn = document.getElementById("changetolayout2");
  const ch1btn = document.getElementById("changetolayout1");
  const chtc =document.getElementById("changetocoursesbtn")

  if (ch2btn && layout2 && ch1btn && layout1 && ch3btn ) {
    ch2btn.addEventListener("click", () => {
      changetolayout2();
    });

    ch1btn.addEventListener("click", () => {
      changetolayout1();
    });

    ch3btn.addEventListener("click", () => {
      changetolayout3();
    });
  } else {
    console.error("No se encontraron elementos requeridos.");
  }
});
function changetolayout2() {
  console.log("Changing to layout 2...");
  layout1.classList.add('hidden');
  layout2.classList.remove('hidden');
}

function changetolayout1() {
  console.log("Changing to layout 1...");
  layout2.classList.add('hidden');
  layout1.classList.remove('hidden');
}

function changetolayout3() {

}
</script>
    <script src="script/messages.js"></script>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1714661861/pliw7bitncliod7vbpb5.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>DevLearn</title>
</head>
<body>
<div class="layout1">
<div class="app-container">
  <div class="app-header">
    <div class="app-header-left">
      <span class="app-icon"></span>
      <p class="app-name">Inicio</p>
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
      <a class="app-sidebar-link active">
      <span class="material-symbols-outlined">
home_app_logo
</span>
      </a>
      <a href="http://localhost/DevLearn/home/core/auth/" class="app-sidebar-link">
      <span class="material-symbols-outlined">
code
</span>
      </a>
      <a id="changetolayout2" class="app-sidebar-link">
      <span class="material-symbols-outlined">
category
</span>
      </a>
      <a id="changetolayout3"  class="app-sidebar-link" href="http://localhost/DevLearn/home/settings/auth/">
      <span class="material-symbols-outlined">
settings
</span>
      </a>
    </div>
    <div class="projects-section">
      <div class="projects-section-header">
        <p>Tus Cursos</p>
        <p class="time"><?php
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'esp');
        $fecha_actual = strftime("%d de %B");

echo $fecha_actual;
?></p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">0</span>
            <span class="status-type">cursos iniciados</span>
          </div>
          <div class="item-status">
            <span class="status-number">0</span>
            <span class="status-type">cursos a los que te sumaste</span>
          </div>
          <div class="item-status">
            <span class="status-number">0</span>
            <span class="status-type">Cursos completados</span>
          </div>
        </div>
        <div class="view-actions">
          <button class="view-btn list-view" title="List View">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
              <line x1="8" y1="6" x2="21" y2="6" />
              <line x1="8" y1="12" x2="21" y2="12" />
              <line x1="8" y1="18" x2="21" y2="18" />
              <line x1="3" y1="6" x2="3.01" y2="6" />
              <line x1="3" y1="12" x2="3.01" y2="12" />
              <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
          </button>
          <button class="view-btn grid-view active" title="Grid View">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7" />
              <rect x="14" y="3" width="7" height="7" />
              <rect x="14" y="14" width="7" height="7" />
              <rect x="3" y="14" width="7" height="7" /></svg>
          </button>
        </div>
      </div>
      <div class="project-boxes jsGridView">
  </div>
</div>
<div class="messages-section">
  <button class="messages-close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
      <circle cx="12" cy="12" r="10" />
      <line x1="15" y1="9" x2="9" y2="15" />
      <line x1="9" y1="9" x2="15" y2="15" /></svg>
  </button>
  <div class="projects-section-header">
    <p>personas con las que chateaste recientemente</p>
  </div>
  <a href="http://localhost/DevLearn/home/chats/auth/" id="chats">
  </a>
</div>
</div>
</div>
</div>
<div class="layout2 hidden">
<div class="app-container">
  <div class="app-header">
    <div class="app-header-left">
      <span class="app-icon"></span>
      <p class="app-name">Cursos Disponibles</p>
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
      <a id="changetolayout1" class="app-sidebar-link">
      <span class="material-symbols-outlined">
home_app_logo
</span>
      </a>
      <a href="" class="app-sidebar-link">
      <span class="material-symbols-outlined">
code
</span>
      </a>
      <a class="app-sidebar-link active">
      <span class="material-symbols-outlined">
category
</span>
      </a>
      <a class="app-sidebar-link" href="http://localhost/DevLearn/home/settings/auth/">
      <span class="material-symbols-outlined">
settings
</span>
      </a>
    </div>
    <div class="button-box">
    <button class="cta">
 <a href="http://localhost/DevLearn/home/services/data/"><span class="hover-underline-animation"> Ver todo los cursos </span></a> 
  <svg
    id="arrow-horizontal"
    xmlns="http://www.w3.org/2000/svg"
    width="30"
    height="10"
    viewBox="0 0 46 16"
  >
    <path
      id="Path_10"
      data-name="Path 10"
      d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
      transform="translate(30)"
    ></path>
  </svg>
</button>

    </div>
    <div class="cards-box">
      
    <div class="grid">
    <div class="card">
        <img class="card__img" src="https://res.cloudinary.com/dm2uezxs1/image/upload/v1714924578/DevLearn/zympnuugjrlcm199vf8l.png" alt="Curso De IA"/>
        <div class="card__content">
            <h1 class="card__header">Programa y comprende la IA</h1>
            <div class="card__text-wrapper"><p class="card__text">La IA es la disciplina que busca desarrollar sistemas capaces de realizar tareas que normalmente requieren inteligencia humana, como el aprendizaje, la percepción, el razonamiento y la toma de decisiones.</p></div>
            <button class="card__btn">Ver mas <span>&rarr;</span></button>
        </div></div>
        <div class="card">
            <img class="card__img" src="SVG/vd.svg" alt="Curso de VideoJuegos"/>
            <div class="card__content">
                <h1 class="card__header">Crea y diseña VideoJuegos</h1>
                <div class="card__text-wrapper"><p class="card__text">"Explora el mundo de los videojuegos en este curso emocionante. Aprende diseño, desarrollo y más. ¡Sumérgete en la creación de tu propio juego!</p></div>
                <button class="card__btn">Ver mas <span>&rarr;</span></button>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</div>
<style>
  .dark:root{
    --app-container:  hsl(0 0% 2%);
  --app-container:  hsl(0 0% 2%);
  --projects-section:hsl(0 0% 2%) ;
  }
  :root{
    --projects-section:hsl(100% 0% 0%) ;
  }
  .messages-section{
    filter: blur(30%)
  }
</style>
</body>
</html>