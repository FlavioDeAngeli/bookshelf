<?php
//database connection
require("./backend/Database.php");

$config = require('config.php');

$db = new Database($config['database']);

//query for library
$books = $db->query("SELECT books.id, books.title, authors.name, authors.surname, books.year, categories.category FROM books JOIN authors ON books.author_id = authors.id JOIN categories ON books.category_id = categories.id")->fetchAll();

//check post request (form submit)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query("INSERT INTO books (title, author_id, year, category_id) VALUES ('$_POST['TITLE']', '$_POST['author']', '$_POST['year']', '$_POST['category']')")
    var_dump($_POST);
}

require "./views/library.view.php";
?>