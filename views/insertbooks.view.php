<?php
require("layout/head.php");
require('layout/navbar.php');
?>
<div class="container-fluid ps-4 pt-3">
    <h2 class="mb-4">Insert Book</h2>
    <form action="/bookshelf/library" method="POST">
        <input class="form-control mb-2" type="text" name='title' placeholder="Titolo">
        <select class="form-select mb-2" type='select' name='author' required>
            <option>Autore</option>
            <option value="1">Albert Camus</option>
            <option value="2">Emmanuel Carrère</option>
        <select>
        <input class="form-control mb-2" type="number" name='year' placeholder="Anno di pubblicazione">
        <select class="form-select mb-4" type='select' name='category' required>
            <option>Categoria</option>
            <option value="1">Filosofia</option>
            <option value="2">Fantascienza</option>
            <option value="3">Saggistica</option>
        <select>
        <input type="submit" name="add-to-library" value="Aggiungi alla Libreria" class="btn btn-primary">
    </form>
    
</div>
<?php
require('layout/footer.php');
?>