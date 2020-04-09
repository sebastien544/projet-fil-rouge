<?php
include_once (__DIR__ . "/../Service/UtilisateurService.php");


session_start();



if (isset($_POST['action']) && $_POST['action'] == 'logout'){
    
    session_unset();

    session_destroy();

   echo '<form class="text-center border border-light p-5" method=POST action="projet-fil-rouge/Back/Controller/authentification.php">
	  
            <p class="h4 mb-4">Sign in</p>

   
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="mail">

    
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password"  name="password">

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

   
         <button class="btn btn-info btn-block my-4 btn btn-blue-grey" type="submit" name="validation" id="jquery-toggle" id="clicked">Sign in</button>

            Register 
            <p>Not a member?
                <br> <a href="signup-page.php">Register</a>
            </p>

        </form>';
    
}

if (isset($_POST['action']) && $_POST['action'] == 'affichage'){
    if(isset($_SESSION['mail'])){
        echo '<div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default">
			
                <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Donation History</a>
                <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Petition History</a>
                <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Personal Informations</a>
            </div>	';

    }else{ echo '<form class="text-center border border-light p-5" method=POST  >
	  
                    <p class="h4 mb-4">Sign in</p>


                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="mail">


                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password"  name="password">

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
                <button class="btn btn-info btn-block my-4 btn btn-blue-grey" type="submit" name="validation" id="jquery-toggle" >Sign in</button>

                    Register 
                    <p>Not a member?
                        <br> <a href="signup-page.php">Register</a>
                    </p>

                </form>';

    }
}
if (isset($_POST['action']) && $_POST['action'] == 'login'){
  //  if(isset($_POST["validation"])){
        $service = new UtilisateurService();
        $data = $service->rechercheUser($_POST["mail"]);
        
            if($data && $service->checkUserNameAndPassword($data["mail"], $data['password'], /*$data['role'],*/ $_POST)){
                    
                    $_SESSION['mail'] = $data["mail"];
                    echo '<div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default">
                
                    <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Donation History</a>
                    <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Petition History</a>
                    <a class="dropdown-item" href="/projet-fil-rouge/Back/Controller/personal-space.php">Personal Informations</a>
                    </div>	';
            }
            else {
                    header("location:home.php?role=error");
            }   
   // }
   

}
