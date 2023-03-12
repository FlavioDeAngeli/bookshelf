<?php
//database connection
require("./backend/Database.php");

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

//TODO - INSERIRE ID NELLA QUERY IN MODO SICURO (VERIFICARE SE IL METODO USATO è CORRETTO)
//query for book: get book id from library link
$book = $db->query("SELECT books.id, books.title, authors.name, authors.surname, books.year, categories.category FROM books JOIN authors ON books.author_id = authors.id JOIN categories ON books.category_id = categories.id WHERE books.id = $id")->fetch();

require "./views/book.view.php";
?>