<?php
session_start();                 //apertura sessione
if (empty($_SESSION["userId"])) { //se la voce 'userId' della sessione è vuota (utente non loggato)
   header("Location: ./controllers/login.php"); //reindirizza verso la pagina di login
}
?>


   