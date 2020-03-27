<?php

session_start();

	if (isset($_GET['action']) && $_GET['action']== 'logout'){
		

		session_destroy();

		header('location:../../Controller/connexion-objet.php');
		

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../CSS/shop.css">
  
</head>
<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark blue-grey">
		<a class="navbar-brand" href="http://localhost/projet-fil-rouge/Back/Antoine/php/gorilla.php">Save-Them.com</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
		  aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item ">
			  <a class="nav-link" href="/projet-fil-rouge/Back/Home/Home.php">Home
				<span class="sr-only">(current)</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="/projet-fil-rouge/Back/Controller/donation-page.php">Donate</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Petition</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="/projet-fil-rouge/Back/Antoine/php/shop_01.php">Shop</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="/projet-fil-rouge/Back/Antoine/php/contactus.php">About us</a>
			</li>
			<li class="nav-item">
			</li>
		  </ul>
	   
				
				
			
		  <ul class="navbar-nav ml-auto nav-flex-icons">
		  <a class="btn-floating btn-lg"  data-toggle="modal" data-target="#modalCart"><span style="color: white"><i class="fas fa-shopping-cart"></i></span></a>
	  
				  <!-- Modal: modalCart -->
				  <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<!--Header-->
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
								<th>#</th>
								<th>Product name</th>
								<th>Price</th>
								<th>Remove</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<th scope="row">1</th>
								<td>Product 1</td>
								<td>100$</td>
								<td><a><i class="fas fa-times"></i></a></td>
							  </tr>
							  <tr>
								<th scope="row">2</th>
								<td>Product 2</td>
								<td>100$</td>
								<td><a><i class="fas fa-times"></i></a></td>
							  </tr>
							  <tr>
								<th scope="row">3</th>
								<td>Product 3</td>
								<td>100$</td>
								<td><a><i class="fas fa-times"></i></a></td>
							  </tr>
							  <tr>
								<th scope="row">4</th>
								<td>Product 4</td>
								<td>100$</td>
								<td><a><i class="fas fa-times"></i></a></td>
							  </tr>
							  <tr class="total">
								<th scope="row">5</th>
								<td>Total</td>
								<td>400$</td>
								<td></td>
							  </tr>
							</tbody>
						  </table>
	  
						</div>
						<!--Footer-->
						<div class="modal-footer">
						  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
						  <button class="btn btn-primary">Checkout</button>
						</div>
					  </div>
					</div>
				  </div>

		  <a class="btn-floating btn-lg " href="../../Controller/connexion-objet.php?action=logout"><span style="color: white"><i class="fas fa-sign-out-alt"></i></span></a>
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
						  <!-- Forgot password -->
						  <a href="">Forgot password?</a>
					  </div>
				  </div>
			  
				  <!-- Sign in button -->
				  <button class="btn btn-info btn-block my-4 btn btn-blue-grey" value="Connexion" type="submit" name="validation">Sign in</button>
			  
				  <!-- Register -->
				  <p>Not a member?
					 <br> <a href="/../../projet-fil-rouge/Back/Controller/signup-page.php">Register</a>
				  </p>
			  
			  </form>
	  
			  </div>
			</li>
	  
		  </ul>
		</div>
	  </nav>
<!--/.Navbar -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-sm-12">
  
      <!--Card Narrower-->
      <div class="card card-cascade narrower">
  
        <!--Card image-->
        <div class="view view-cascade overlay">
          <img src="https://images.pexels.com/photos/2573946/pexels-photo-2573946.jpeg?cs=srgb&dl=group-of-animal-figurines-2573946.jpg&fm=jpg" class="card-img-top"
            alt="narrower">
        
        </div>
        <!--/.Card image-->
  
        <!--Card content-->
        <div class="card-body card-body-cascade">
          <h5 class="blue-text"><i class="fas fa-hippo"></i> Shop</h5>
          <!--Title-->
          <h4 class="card-title">Selection of Goodies</h4>
          <!--Text-->
          <p class="card-text">You can find in this section our selection of goodies, don't hesiate to visit our online shop.</p>
          <a class="btn btn-unique btn btn-blue-grey" href="/projet-fil-rouge/Back/Antoine/php/shop_03.php">Go to Shop</a>
        </div>
        <!--/.Card content-->
  
      </div>
      <!--/.Card Narrower-->
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-5 col-sm-12">
  
      <!--Card Narrower-->
      <div class="card card-cascade narrower">
  
        <!--Card image-->
        <div class="view view-cascade overlay">
          <img src="https://images.pexels.com/photos/171183/pexels-photo-171183.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top"
            alt="narrower">
          
        </div>
        <!--/.Card image-->
  
        <!--Card content-->
        <div class="card-body card-body-cascade">
          <h5 class="blue-text"><i class="fas fa-hippo"></i> Shop</h5>
          <!--Title-->
          <h4 class="card-title">Stuffed Toys</h4>
          <!--Text-->
          <p class="card-text">In this area you can a wonderfull selection of stuffed toys, please click on the button bellow.</p>
          <a class="btn btn-unique btn btn-blue-grey" href="/projet-fil-rouge/Back/Antoine/php/shop_02.php">Go to Shop</a>
        </div>
        <!--/.Card content-->
  
      </div>
      <!--/.Card Narrower-->
  
    </div>
    <!-- Grid column -->
  
  
  
  </div>
  <!-- Grid row -->

<!-- Footer -->
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
<!-- Footer -->
<!-- Footer -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>
</body>
</html>