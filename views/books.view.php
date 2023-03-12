<?php
require("layout/head.php");
require('layout/navbar.php');
?>
<main>
    <div class="container-fluid ps-4 mt-3">
        <h2>Libreria:</h2>
    </div>
    <div class="list-group ps-2 pe-2 mt-3">
        <?php foreach ($books as $book) {
            echo "<a href='#' class='list-group-item list-group-item-action'>"
            . $book['title'] ." - " . $book['name'] . " " . $book['surname'] ." - " . $book['year'] ." - " . $book['category'] . "</a>";
        } ?>
    </div>
</main>
<?php
require('layout/footer.php');
?>