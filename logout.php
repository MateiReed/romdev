<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php"); // Redirecționează către pagina de autentificare
exit;
?>