<?php
//database connection
require("./backend/Database.php");

$config = require('config.php');
$db = new Database($config['database']);

//query for library
$authors = $db->query("SELECT * FROM authors")->fetchAll();

require "./views/auhtors.view.php";
?>