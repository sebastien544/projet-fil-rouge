
<?php

session_start();

	if (isset($_GET['action']) && $_GET['action']== 'logout'){
		

		session_destroy();

		header('location:connexion-objet.php');
		

	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">

      html,
      body,
      header,
      .carousel {
        height: 60vh;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
    </style>
</head>

<body>
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark blue-grey">
    <a class="navbar-brand" href="gorilla.php">Save-Them.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="donation-page.php">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="petition.php">Petition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop_03.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">About us</a>
          </li>
        <li class="nav-item">
          
        </li>
        
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <form class="text-center border border-light p-5" method="POST" action="/projet-fil-rouge/Back/Controller/authentification.php">
              <p class="h4 mb-4">Sign in</p>
          
              <!-- Email -->
              <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="mail">
          
              <!-- Password -->
              <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">
          
              <div class="d-flex justify-content-around">
                  <div>
                      <!-- Remember me -->
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                          <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                      </div>
                  </div>
                  <div>
                      
                      <a href="">Forgot password?</a>
                  </div>
              </div>
          
              <!-- Sign in button -->
              <button class="btn btn-info btn-block my-4 btn btn-blue-grey" type="submit" name="validation">Sign in</button>
          
              <!-- Register -->
              <p>Not a member?
                 <br> <a href="signup-page.php">Register</a>
              </p>
          
          </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">
        <div class="view" style="background-image: url('img/chimpanze.jpeg'); background-repeat: no-repeat; background-size: cover;background-position: center;">

          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
             
             

              

              
            </div>
          

          </div>
        

        </div>
      </div>
      

    </div>
   
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  
  <main>
    <div class="container">
      <h1 class="text-center mt-5"> PERSONAL SPACE</h1>
      <section class="mt-5 wow  fadeIn">
        <div class="row">
          <div class="col-md-5 ">
            <p class="text-center h4 ">Donation history</p>
            <table class="table table-bordered mb-5">
              <thead>
                <tr>
                  <th scope="col">Number Donation</th>
                  <th scope="col">Date</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Animal</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include("../Service/UtilisateurService.php");
                  $userServ = new UtilisateurService;
                  $data = $userServ->afficherDon($_SESSION['mail']);
                  for($i=0; $i < sizeof($data); $i++){
                    echo '<tr>
                          <th scope="row">'.($i+1).'</th>
                          <td>'.$data[$i]['date'].'</td>
                          <td>'.$data[$i]['montant_don'].'</td>
                          <td>'.$data[$i]['type_animal'].'</td>
                          </tr>';
                  }
                ?>
              </tbody>
            </table>
            <p class="text-center h4 mt-5">Petition history</p>
            <table class="table table-bordered mb-5">
              <thead>
                <tr>
                  <th scope="col">Number Petition</th>
                  <th scope="col">Date</th>
                  <th scope="col">Animal</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $userServ = new UtilisateurService;
                  $data = $userServ->afficherPet($_SESSION['mail']);
                  for($i=0; $i < sizeof($data); $i++){
                    echo '<tr>
                          <th scope="row">'.($i+1).'</th>
                          <td>'.$data[$i]['date_signature'].'</td>
                          <td>'.$data[$i]['type_animal'].'</td>
                          </tr>';
                  }
                ?>
              </tbody>
            </table>
          </div>
          <div class="col-md-5  offset-2 mb-4 ">
          <?php
            $userServ = new UtilisateurService;
            $data = $userServ->rechercheUser($_SESSION['mail']);
            echo  '<form class="text-center border border-light p-5" action="#!">
                    <p class="h4 mb-4">Personal informations</p>
                    <div class="form-row mb-4">
                      <div class="col">
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" value="'.$data['prenom'].'" disabled="disabled">
                      </div>
                    <div class="col">
                        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" value="'.$data['nom'].'" disabled="disabled">
                      </div>
                    </div>
                    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" value="'.$data['mail'].'" disabled="disabled">
                    <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    <input type="text" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control mb-1" placeholder="Address">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control mb-4" placeholder="">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control mb-4" placeholder="Zip code">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control " placeholder="Country">
                    <button class="btn btn-blue-grey my-4 btn-block" style="width: 125px;" type="submit">MODIFY</button>
                  </form>';
          ?>
           </div>
        </div>
      </section>
    </div>
  </main>


  
  <footer class="page-footer font-small blue-grey pt-4">
    <!-- Footer Elements -->
    <div class="container">
      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->
    </div>
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
