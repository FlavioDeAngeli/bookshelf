<?php
require("layout/head.php");
require('layout/navbar.php');
?>
<main>
    <div class="container-fluid ps-4 mt-3">
        <h2>Libro selezionato:</h2>
    </div>
    <div class="list-group ps-2 pe-2 mt-3">
        <?php 
            echo "<li class='list-group-item list-group-item-action'>"
            . $author['name'] . " " . $author['surname'] ." - Biography: " . $author['biography']. "</li>";
        ?>
    </div>
</main>
<?php
require('layout/footer.php');
?>