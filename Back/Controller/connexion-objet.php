<?php


/* include_once("../Service/UtilisateurService.php");
  
  if(isset($_POST["valider"]) && $_POST["valider"]=="connecter"){
        $userServ = new UtilisateurService();
        $data = $userServ->rechercheUser($_POST["mail"]);
        if($data){
            $bool = $userServ->checkUserNameAndPassword($data[0]["mail"], $data[0]["password"], $_POST);
            if($bool == TRUE){
                header('Location: personal-space.html');
            }else{
                echo "wrong mail or password";
            }
        }else{
            echo "user not found";
        }
        
   } */
?>

<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="mt-5 text-center">Connexion</h1>
            <form class="col-6 mt-5" style="margin-left: 250px"  method=POST action="authentification.php" >
            <div class="form-group">
                <label for="username">Mail</label>
                <input type="mail" class="form-control" id="user" name="mail">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="pass" name="password">
            </div>
            <input type="submit" class="btn btn-primary" value="Connexion" type="submit" name="validation">
            <a class="btn btn-primary" href="ajout-objet.php">Inscription</a>
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
