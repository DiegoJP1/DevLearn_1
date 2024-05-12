<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende IA | DevLearn</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1714661861/pliw7bitncliod7vbpb5.png" type="image/x-icon">
</head>
<script>
    const showTableBtn = document.getElementById('showTableBtn');

function showtable(){
    const programaSemanalCard = document.getElementById('programaSemanalCard');
        if(programaSemanalCard.style.display == 'block'){
    programaSemanalCard.style.display = 'none';
  }
  else{
    programaSemanalCard.style.display = 'block';
  }
    }
</script>
<header>
<nav>
<a href="http://localhost/DevLearn/home/services/data/" class="goback" style="  z-index: 999999999999999999"><span class="material-symbols-outlined">
arrow_back_ios_new
</span></a>
</nav>
</header>
<body>
<div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>


    <div class="dashboard">
        
        <div class="card hero">
            <h1>Bienvenido al Futuro de la Inteligencia Artificial</h1>
            <p>Explora el emocionante mundo de la inteligencia artificial con nuestro curso avanzado.</p>
            <a href="#" class="cta-button">Inscríbete Ahora</a>
        </div>

        <div class="card course-info glassmorphism">
            <h2>Detalles del Curso</h2>
            <ul>
                <li><strong>Duración:</strong> 8 Semanas</li>
                <li><strong>Temas:</strong> Machine Learning, Redes Neuronales, Procesamiento de Lenguaje Natural, etc.</li>
                <li><strong>Formato:</strong> Clases en línea, tareas y proyectos prácticos</li>
            </ul>
        </div>

        <div class="card schedule glassmorphism">
            <h2>Requisitos</h2>
            
          <ul>
<li>Computador</li>
<li>Acceso a internet</li>
<li>Visual Studio Code</li>
<li>no se requiere conocimientos previos</li>
          </ul>
          <hr>
          <h2>Horarios</h2>
          <ul>
            <li>Lunes: 3pm a 5pm (hora cdmx)</li>
            <li>miercoles: 3pm a 5pm (hora cdmx)</li>
            <li>viernes: 5pm a 8pm (hora cdmx)</li>
          </ul>
            <br>
            <a href="#" class="cta-button" id="showTableBtn" onclick="showtable()">Ver Programa semanal</a>
        </div>
    </div>

    <div class="glassmorphism-card" id="programaSemanalCard">
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programa Semanal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="material-symbols-outlined" onclick="showtable()">
close
</span></h2>
    
    <table>
        <tr>
            <th>Semana</th>
            <th>Temas</th>
            <th>Actividades</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Introducción a la IA</td>
            <td>¿Qué es la IA? ¿Cuál es su límite? ¿Puede reemplazar a los humanos?</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Aprendizaje Automático Básico</td>
            <td>¿Qué es el aprendizaje automático? ¿Cómo funciona? ¿Para qué sirve?</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Programa tu primera IA de aprendizaje automático</td>
            <td>Programarán su primera IA de aprendizaje automático con ayuda del profesor</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Redes Neuronales</td>
            <td>Conceptos básicos de redes neuronales artificiales</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Aplicaciones de la IA en la vida cotidiana</td>
            <td>Casos de uso y aplicaciones prácticas de la inteligencia artificial</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Ética en la IA</td>
            <td>Consideraciones éticas y sociales del desarrollo de la IA</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Aprendizaje Profundo (Deep Learning)</td>
            <td>Conceptos avanzados de aprendizaje profundo y redes neuronales convolucionales</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Proyecto Final</td>
            <td>Desarrollo y presentación de un proyecto práctico de inteligencia artificial</td>
        </tr>
    </table>
</div>

    <script src="https://kit.fontawesome.com/e267099c50.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<style>
    #programaSemanalCard span{
        cursor: pointer;
    }
    #programaSemanalCard{
        display: none;
    }
    .goback{
        z-index: 999999999999999999;
        position: absolute;
        top: 1%;
    }
</style>
</html>
