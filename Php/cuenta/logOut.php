<?php
session_start();

// Borrar los datos de la sesion
session_unset();
session_destroy();
header("Location: ../../index.php");

?>