<?php
//database connection
require("./backend/Database.php");

$config = require('config.php');
$db = new Database($config['database']);

//query for library
$books = $db->query("SELECT books.id, books.title, authors.name, authors.surname, books.year, categories.category FROM books JOIN authors ON books.author_id = authors.id JOIN categories ON books.category_id = categories.id")->fetchAll();

require "./views/library.view.php";
?>