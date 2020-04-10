<?php
include_once (__DIR__ . "/../Service/UtilisateurService.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


session_start();



if (isset($_POST['action']) && $_POST['action'] == 'logout'){
    
    session_unset();

    session_destroy();

    
}

if (isset($_POST['action']) && $_POST['action'] == 'affichage'){
    if(isset($_SESSION['mail'])){
        echo ' <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Donation History</a>
                <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Petition History</a>
                <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Personal Informations</a>
             ';

    }else{ echo '
                <form class="text-center border border-light p-5" >

	  
                    <p class="h4 mb-4">Sign in</p>


                    <input type="email" id="mail" class="form-control mb-4" placeholder="E-mail" name="mail" >


                    <input type="password" id="password" class="form-control mb-4" placeholder="Password"  name="password">

                <div class="d-flex justify-content-around">
                    <div>
                    Remember me 
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                        <div>
                                Forgot password 
                            <a href="">Forgot password?</a>
                        </div>
                </div>

                <input type="hidden" name="action" value="login">
                <button class="btn btn-info btn-block my-4 btn btn-blue-grey" name="validation" id="jquery-toggle" type="submit" >Sign in</button>
          

                    Register 
                    <p>Not a member?
                        <br> <a href="signup-page.php">Register</a>
                    </p>

                </form>';

    }
}
if (isset($_POST['action']) && $_POST['action'] == 'login'){

        $service = new UtilisateurService();
        try{
            $data = $service->rechercheUser($_POST["mail"]);
            $jse=0;
        }catch(mysqli_sql_exception $mse){
            $jse=json_encode(array("error" => array("code" => $msqd ->getCode(),
                                                    "message" => $msqd -> getMessage()
                                                     )), JSON_UNESCAPED_UNICODE);
        // echo $jse;
        }
       
        
            if($data && $service->checkUserNameAndPassword($data["mail"], $data['password'], /*$data['role'],*/ $_POST)){
                    
                    $_SESSION['mail'] = $data["mail"];
                    $success=array('success'=>true);
                    echo json_encode($success);
                    
            }
            else {
                    $erreur=array('erreur'=>true);
                    echo json_encode($erreur);
            }   

   

}
