<?php
include_once ("../Service/UtilisateurService.php");

session_start();

  
  if($_POST){
		if(isset($_SESSION['mail'])){
		  $userServ = new UtilisateurService;
		  $userServ->ajout_don($_POST, $_SESSION['mail']);
		}
	  }

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home page </title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
 

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

            <a class="btn-floating btn-lg " title="Logout" id="deconnection"><span style="color: white"><i class="fas fa-sign-out-alt"></i></span></a>
                <!--/Dropdown primary-->
              <li class="nav-item dropdown"  >
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" title="Login or register" data-toggle="dropdown"
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

  <div class="col-md-12">
          <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/giraffe-home2.jpg"
            alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <img class="d-block w-100" src="img/Gorilla-home2.jpg"
            alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
          <img class="d-block w-100" src="img/Tiger-home.jpg"
            alt="Third slide">
        </div>
        <!--/Third slide-->
      </div>
      <!--/.Slides-->
      <!--Controls-->
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
  </div>  

 


<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-sm-4 offset-sm-4 "><h1>Save Them are engaged to save the species in Danger in the Wakanda</h1></div>
				</div>
					<div class="row text-black">
						<div class="col-md-10 offset-md-1">
							<p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum. <br/>
								<br/>
								<hr>

							</p>
							
						</div>



						<div class="col-md-10 offset-1">
								<button type="button" class="btn btn-blue-grey" href="signup-page.php">Sign Up</button>
						</div>
          </div>
  </div>
  <div class="col-lg-4 col-sm-12">
    <!-- Card Wider -->
<div class="card card-cascade wider">

<!-- Card image -->
<div class="view view-cascade overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center pb-0">

  <!-- Title -->
  <h4 class="card-title"><strong>Alison Belmont</strong></h4>
  <!-- Subtitle -->
  <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
  <!-- Text -->
  <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
    laudantium, totam rem aperiam. </p>

  <!-- Linkedin -->
  <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
  <!-- Twitter -->
  <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
  <!-- Dribbble -->
  <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  <!-- Card footer -->
  <div class="card-footer text-muted text-center mt-4">
    2 days ago
  </div>

</div>

</div>
<!-- Card Wider -->
<!-- Card Wider -->
<div class="card card-cascade wider">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center pb-0">

    <!-- Title -->
    <h4 class="card-title"><strong>Alison Belmont</strong></h4>
    <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
    <!-- Text -->
    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
      laudantium, totam rem aperiam. </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

    <!-- Card footer -->
    <div class="card-footer text-muted text-center mt-4">
      2 days ago
    </div>

  </div>

</div>
<!-- Card Wider -->


  </div>

  
 

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
		<a href="home.php"> Robert Fundation - Save-Them.com</a>
	</div>
<!-- Copyright -->
</footer>
<!--/.Footer-->

  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="js/home.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/shop.js"></script>

</body>
</html>
