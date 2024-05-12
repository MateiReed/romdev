<?php
session_start();
session_unset();
session_destroy();
header("Location: index.html"); // Redirecționează către pagina de autentificare
exit;
?>