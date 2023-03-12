<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-3" href="/bookshelf">Bookshelf</a>
   
        <div class="collapse navbar-collapse ms-3" id="navbarNav">
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a class="nav-link" href="bookshelf/books.php">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="authors.php">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insertbooks.php">Link 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="searchbooks.php">Link 4</a>
                </li>
            </ul> 
        </div>
        <div class="nav-link m-3" ><?php echo $_SESSION["userInfo"]?></div>
        <a class="nav-link m-3" href="./functions/logout.php">Logout</a>
    </div>
</nav>
