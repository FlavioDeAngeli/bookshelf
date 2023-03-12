<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-3" href="/bookshelf">Bookshelf</a>
   
        <div class="collapse navbar-collapse ms-3" id="navbarNav">
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a class="nav-link" href="books">Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="authors">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insertbooks">Insert Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="searchbooks">Search Book</a>
                </li>
            </ul> 
        </div>
        <div class="nav-link m-3" >
            <?php
                if(!isset($_SESSION)){
                    session_start();
                }
                echo $_SESSION["userInfo"]; ?>
        </div>
        <a class="nav-link m-3" href="./functions/logout.php">Logout</a>
    </div>
</nav>