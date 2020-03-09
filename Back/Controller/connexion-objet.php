

<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="mt-5 text-center">Connexion</h1>
            <form class="col-6 mt-5" style="margin-left: 250px"  method=POST action="test-objet.php" >
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp" required>
                </div>
                <input type="hidden" class="form-control" id="exampleInputEmail1" name="action" value="connecter">
                <button type="submit" class="btn btn-primary mx-2" action="test-objet.php">Connexion</button><a class="btn btn-primary" href="ajout-objet.php">Inscription</a>
            </form>  
        </div>

        <?php

        if(isset($_GET["role"]) && $_GET["role"] == "error"){

            echo "</br>
                        <div class='alert alert-danger' role='alert'>
                        The username and the password doesn't match or the username doesn't exist
                     </div>";
        }
        ?>

    </body>
</html>
