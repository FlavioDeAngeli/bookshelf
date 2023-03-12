<?php
require("layout/head.php");
require("layout/navbar.php");
?>
<main>
    <div class="container-fluid ps-4 mt-3">
        <h2>Lista dei miei libri:</h2>
    </div>
    <div class="list-group ps-2 pe-2 mt-3">
        <?php foreach ($books as $book) {
            echo "<a href='#' class='list-group-item list-group-item-action'>"
            . $book['title'] ." - " . $book['name'] . " " . $book['surname'] ." - " . $book['year'] ." - " . $book['category'] . "</a>";
        } ?>
    </div>
</main>

<?php require("layout/footer.php"); ?> 

<!--TEST QUERY:

SELECT books.title, authors.name, authors.surname, books.year, categories.category FROM books JOIN authors ON books.author_id = authors.id JOIN categories ON books.category_id = categories.id;

INSERT INTO books (title, author_id, year, category_id) VALUES ('Io sono vivo, voi siete morti', '2', '1993', '4');-->