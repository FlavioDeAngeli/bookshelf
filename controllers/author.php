<?php
//database connection
require("./backend/Database.php");

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

//TODO - INSERIRE ID NELLA QUERY IN MODO SICURO (VERIFICARE SE IL METODO USATO è CORRETTO)
//query for book: get book id from library link
$author = $db->query("SELECT * FROM authors WHERE authors.id = $id")->fetch();

if(!$author){
    abort();
}

require "./views/author.view.php";
?>