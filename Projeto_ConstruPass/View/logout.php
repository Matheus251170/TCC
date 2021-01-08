<?php

session_start();
unset($_SESSION['id_login']);

header("Location: TelaLogin.php");

?>