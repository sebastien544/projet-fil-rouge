<?php session_start(); ?>
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
				<li class="nav-item ">
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
				<a class="nav-link" href="shop_01.php">Shop</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="contactus.php">About us</a>
				</li>
				<li class="nav-item">
				</li>
			</ul>
		
			<ul class="navbar-nav ml-auto nav-flex-icons">
			<a class="btn-floating btn-lg" title="Cart" data-toggle="modal" data-target="#modalCart"><span style="color: white"><i class="fas fa-shopping-cart"></i></span></a>
		 <!-- Modal: modalCart -->
		 <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
			<div class="modal-header">
						  <h4 class="modal-title" id="myModalLabel">Your cart</h4>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						  </button>
						</div>
						<!--Body-->
						<div class="modal-body">
            <table class="table table-hover">
							<thead>
							  <tr>
								<th></th>
								<th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
								<th>Remove</th>
							  </tr>
							</thead>
							<tbody  id="cart">
							  <tr class="total">
								<th scope="row"></th>
								<td>Total</td>
								<td id="total">0</td>
								<td></td>
							  </tr>
							</tbody>
						</table>
	  
						</div>
						<!--Footer-->
						<div class="modal-footer">
						<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
						<a type="button" class="btn btn-primary" href="checkout-page.php">Checkout</a>
						</div>
					</div>
					</div>
				</div>

					<a class="btn-floating btn-lg" title="Logout" id="deconnection"><span style="color: white"><i class="fas fa-sign-out-alt"></i></span></a>
						<!--Dropdown primary-->
						<li class="nav-item dropdown"  >
							<a class="nav-link dropdown-toggle" title="Login or register" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default"  aria-labelledby="navbarDropdownMenuLink-333">
							<div id="warning1"></div>
							
							<div id="loginDiv"></div>
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
            <div class="text-center white-text mx-5 wow fadeIn"> </div>
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

		<!-- Footer -->
    <footer class="page-footer font-small blue-grey pt-4">

<!-- Footer Elements -->
<div class="container">

<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">	
    <div class="btn-group dropup">
    <button class="btn btn-blue-grey dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Get Involved</button>
      <div class="dropdown-menu blue-grey">
        <a class="dropdown-item blue-grey" href="donation-page.php">Make a Donation</a>
        <a class="dropdown-item blue-grey " href="gorilla.php">Our fights</a>
        <a class="dropdown-item blue-grey" href="petition.php">Petition</a>
        <a class="dropdown-item blue-grey" href="shop_01.php">Shop</a>
      </div>
    </div>
  </li>

  
  <li class="list-inline-item">
      <div class="btn-group dropup">
        <button class="btn btn-blue-grey dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">About Save-Them</button>
        
        <div class="dropdown-menu blue-grey">
          <a class="dropdown-item blue-grey" href="contactus.php">Contact Us</a>
          <a class="dropdown-item blue-grey " href="#">Need Help</a>
          <a class="dropdown-item blue-grey" href="#">Joint Save-Them</a>
        </div>
      </div>
  </li>
  <li class="list-inline-item">
  <div class="btn-group dropup">
        <button class="btn btn-blue-grey dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Get Informed</button>
      
      <div class="dropdown-menu blue-grey">
        <a class="dropdown-item blue-grey" href="#">Newsletter</a>
        <a class="dropdown-item blue-grey " href="#">Us in the Press</a>
        <a class="dropdown-item blue-grey" href="#">the Animals in Danger</a>
      </div>
    </div>
  
  </li>
  <li class="list-inline-item">
  <div class="btn-group dropup">
      <button class="btn btn-blue-grey dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Legal</button>
      <div class="dropdown-menu blue-grey">
        <a class="dropdown-item blue-grey" href="#">Cookies</a>
        <a class="dropdown-item blue-grey " href="#">Privacy and Data Protection</a>
        <a class="dropdown-item blue-grey" href="#">Terms & Conditions</a>
    
      </div>
    </div>
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
    <script type="text/javascript" src="js/script.js"></script>
	  <script src="https://code.jquery.com/jquery-3.4.1.slim.js"
	  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Your custom scripts (optional) -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/shop.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
