<?php
require("layout/head.php");
require('layout/navbar.php');
?>
<main>
    <div class="row d-flex align-items-center ps-4 mt-3">
        <div class="col-1 me-3"><h2>Libreria:</h2></div>
        <div class="col"><a href="insertbooks"><button class="btn btn-primary">Add Book</button></a>
        </div>  
    </div> 
    <!-- //TODO - CREATE BUTTONTO TO ADD BOOK TO YOUR BOOKSHELF -->
    <div class="list-group ps-2 pe-2 mt-3">
        <?php foreach ($books as $book) {
            echo "<a href='book?id=".$book['id'] . "' class='list-group-item list-group-item-action'>"
            . htmlspecialchars($book['title'])  ." - " . htmlspecialchars($book['name']) . " " . htmlspecialchars($book['surname']) ." - " . $book['year'] ." - " . $book['category'] . "</a>";
        } ?>
    </div>
       
</main>
<?php
require('layout/footer.php');
?>