<?php
include_once ("../Service/UtilisateurService.php");

session_start();

	if (isset($_GET['action']) && $_GET['action']== 'logout'){
		
		session_unset();

		session_destroy();

		header('location:connexion-objet.php');
		
	}
	if($_POST){
		if(isset($_SESSION['mail'])){
		  $userServ = new UtilisateurService;
		  $userServ->ajout_don($_POST, $_SESSION['mail']);
		}
	  }
?>

<!DOCTYPE html>
<html>
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
		<link href="" rel="stylesheet">
	  </head>
<body class="grey lighten-3">

	<nav class="mb-1 navbar navbar-expand-lg navbar-dark blue-grey">
		<a class="navbar-brand" href="/projet-fil-rouge/Back/Controller/gorilla.php">Save-Them.com</a>
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
			  <a class="nav-link" href="#">Petition</a>
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

		  <a class="btn-floating btn-lg " href="connexion-objet.php?action=logout"><span style="color: white"><i class="fas fa-sign-out-alt"></i></span></a>
			<!--Dropdown primary-->
			<li class="nav-item dropdown" id="menuDiv">
				<!--Trigger-->
				<a class="nav-link dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
				<div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default">

							<!--Menu-->
							
							<a class="dropdown-item" href="personal-space.php">Donation History</a>
							<a class="dropdown-item" href="personal-space.php">Petition History</a>
							<a class="dropdown-item" href="personal-space.php">Personal Informations</a>
						
						
					</div>	
			</li>
				<!--/Dropdown primary-->
		  <li class="nav-item dropdown" id="loginDiv" >
			  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user"></i>
			  </a>
			  <div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default"
				aria-labelledby="navbarDropdownMenuLink-333">
				<form class="text-center border border-light p-5" method=POST action="authentification.php">
	  
				  <p class="h4 mb-4">Sign in</p>
			  
				  <!-- Email -->
				  <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="mail">
			  
				  <!-- Password -->
				  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password"  name="password">
			  
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
				  <button class="btn btn-info btn-block my-4 btn btn-blue-grey" type="submit" name="validation" id="jquery-toggle" id="clicked">Sign in</button>
			  
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
	  <div class="col-md-10 offset-md-1">
	  <img src="img/gorille2.jpg" class="img-fluid" alt="Responsive image">
	</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 offset-md-5"><h1>Gorilla</h1></div>
				
			  </div>
				 <div class="row text-black">
				 <div class="col-md-10 offset-md-1">
				 	<p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum. <br/>
				 		<br/>
				 		<hr>

					 Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page,
					  le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement,
					   on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.
					   Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page,
					    le texte définitif venant remplacer
						le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.
						Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page,
						 le texte définitif venant remplacer
						 le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.
				 	</p>
				 	
				 </div>



			<div class="col-md-10 offset-1">
				 	<button type="button" class="btn btn-success">Donate</button>
				 </div>
		    </div>
		</div>
	


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

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js"
	integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
	crossorigin="anonymous"></script>

  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>