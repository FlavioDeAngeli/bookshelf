<html>
<head>
    <title>Bookshelf</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
    <div class="container-float row justify-content-center main-content pt-5">
        <div class="container-float col-4">
            <h3 class="mb-5 text-center">Bookshelf Login</h3>
            <form action="../functions/login-action.php" method="post" id="frmLogin">
                <?php
                if (isset($_SESSION["errorMessage"])) {
                ?>
                    <div class="error-message"><?php echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
                <?php
                if (isset($_COOKIE["WelcomeCookie"])) {
                ?>
                    <div>Bentornato, <b><?php echo $_COOKIE["WelcomeCookie"]  ?></b>
                        la tua sessione è scaduta e ti devi riloggare.</div>
                <?php
                }
                unset($_COOKIE['WelcomeCookie']);
                setcookie("WelcomeCookie", "", time() - 3600);
                ?>


                <div class="mb-3">
                    <label for="username" class="form-label">Username</label><span id="user_info" class="error-info"></span>
                    <input name="user_name" id="user_name" type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label><span id="password_info" class="error-info"></span>
                    <input name="password" id="password" type="password" class="form-control" required>
                </div>
                <div class="mt-5 mb-2">
                        <input type="submit" name="login" value="Login" class="btn btn-primary col-12">                   
                </div>
                <div class="mb-3 text-center">
                    <a href="#">Password smarrita?</a>|<a href="#">Registrati</a>
                </div>

            </form>
        </div>
    </div>
    <?php require("layout/footer.php"); ?>