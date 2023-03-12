<?php
include "./functions/login_check.php";

//database connection
require("./backend/Database.php");

$config = require('config.php');

$db = new Database($config['database']);

//query for index page
//TODO - RIFARE QUERY SELEZIONANDO DA USER_BOOKS WHERE ID = $_SESSION[ID]
$books = $db->query("SELECT books.title, authors.name, authors.surname, books.year, categories.category FROM books JOIN authors ON books.author_id = authors.id JOIN categories ON books.category_id = categories.id")->fetchAll();

require "./views/index.view.php";
?>