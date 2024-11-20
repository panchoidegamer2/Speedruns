<?php
session_start();
echo "<header class='site-header'> 

<div class='logo'>
  <a href='index.php'><img src='Assets/Imagenes/icono.png'></a>
  <a href='index.php' id='texto'><h2>Speed Knights</h2></a>
</div>

<div class='botones' id='desplegable'>
  <ul>";
    if(isset($_SESSION["tipoUsuario"]))
    {
      echo "<li><b><a href='Php/Runs/formRun.php'>PUBLICAR RUN</a></b></li>";
    }
    echo "<li><b><a href='Php/Runs/verRuns.php'>RUNS</a></b></li>
          <li><b><a href='Php/verJugadores/Jugadores.php'>JUGADORES</a></b></li>";
    if(isset($_SESSION["tipoUsuario"])){
      echo "<li><b><a href='Php/cuenta/Cuenta.php'>CUENTA</a></b></li>";
    }
    else{
      echo "<li><b><a href='php/login/formLogin.php'>LOGIN</a></b></li>";
    }
  
    echo "</ul>
</div>
<button class='menuH' onclick='desplegar()'>
      <spam class='bar'></a></spam>
      <spam class='bar'></a></spam>
      <spam class='bar'></a></spam>
  </button>
</header>
<script>
function desplegar() {
    var menu = document.getElementById('desplegable');
    menu.classList.toggle('click');
  }
</script>
"

?>