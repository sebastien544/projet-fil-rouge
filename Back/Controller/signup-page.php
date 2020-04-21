<?php

  session_start();

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
    <link href="css/Sign-up.css">
    <link href="css/style.min.css" rel="stylesheet">
    
    
</head>

<body>

  <!-- Navbar -->
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
					<!--/Dropdown primary-->
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
  
    <!-- navbar -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-12 col-md-12 border" style="background-image: url(img/gray-elephant-3739343.jpg); background-size: cover;background-position: center center;">
        <h2 class="mb-3 text-white text-center mt-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 4vw; " >Help us, make a donation.</h2>
          <div class="offset-2 col-8 text-white" style="margin-top: 85%; position:relative;">
            <h1 class="mb-3 " style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 5vw;" >He will never forget you !</h1>
          </div>
      </div>
      <div class="col-xl-6 col-lg-12 col-md-12" style="background-color: rgb(233, 232, 231);">
        <form class="col-md-8 offset-md-2 " method="POST" action="authentification.php">
          <h1 class="text-center mb-5" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Sign up</h1>
          <div class="col" >
          <input type="text" id="defaultRegisterFormFirstName" class="form-control mb-5" placeholder="First name" name="firstName" style="background-color: rgb(233, 232, 231);">
           
          </div>
          <div class="col">
          <input type="text" id="defaultRegisterFormLastName" class="form-control mb-5" placeholder="Last name" name="lastName" style="background-color: rgb(233, 232, 231);">
           
          </div>
          <div class="col">
            <input type="email" id="defaultRegisterEmail" class="form-control mb-2" name="mail" placeholder="E-mail" style="background-color: rgb(233, 232, 231);" >
            <label for="materialLoginFormEmail" class="text-white"></label>
          </div>
          <div class="col">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted">
              At least 8 characters and 1 digit
            </small>
            <input type="password" id="defaultRegisterFormPassword" class="form-control mb-5" placeholder="Password" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock" style="background-color: rgb(233, 232, 231);">
           
          </div>

          <div class="col">
          <input type="password" id="defaultRegisterFormPassword" class="form-control mb-5" placeholder="Verification Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"name="password_verification" style="background-color: rgb(233, 232, 231);">
          
          </div>
          
          <button class="btn btn-black rounded my-4 "  type="submit" name="validation" >Sign up</button>
          </form>
      </div>
    </div>
  </div>



 		<!-- Footer -->
     <footer class="page-footer font-small blue-grey pt-4">

<!-- Footer Elements -->
<div class="container">

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

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
<a href="home.php"> Robert Fundation - Save-Them.com</a>
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
