<?php
require("layout/head.php");
require('layout/navbar.php');
?>
<main>
    <div class="container-fluid ps-4 mt-3">
        <h2>Autori:</h2>
    </div>
    <div class="list-group ps-2 pe-2 mt-3">
        <?php foreach ($authors as $author) {
            echo "<a href='author?id=".$author['id'] . "' class='list-group-item list-group-item-action'>" . $author['name'] . $author['surname'] . "</a>";
        } ?>
    </div>
</main>
<?php
require('layout/footer.php');
?>