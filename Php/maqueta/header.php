<?php

echo "<header class='site-header'> 

<div class='logo'>
  <a href='index.php'><img src=''></a>
</div>

<div class='botones' id='desplegable'>
  <ul>";
    if(isset($_SESSION["tipoUsuario"]))
    {
      echo "<li><b><a href=''>PUBLICAR RUN</a></b></li>";
    }
    echo "<li><b><a href=''>RUNS</a></b></li>
          <li><b><a href=''>JUGADORES</a></b></li>";
    if(isset($_SESSION["tipoUsuario"])){
      echo "<li><b><a href=''>CUENTA</a></b></li>";
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
    header.classList.toggle('headerBG');
    menu.classList.toggle('click');
  }
</script>
"

?>