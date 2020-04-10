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
			<a class="btn-floating btn-lg"  data-toggle="modal" data-target="#modalCart"><span style="color: white"><i class="fas fa-shopping-cart"></i></span></a>
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
									<th>#</th>
									<th>Product name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Remove</th>
								</tr>
								</thead>
								<tbody  id="cart">
								<tr class="total">
									<th scope="row">5</th>
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
						<button class="btn btn-primary">Checkout</button>
						</div>
					</div>
					</div>
			</div>

					<a class="btn-floating btn-lg " id="deconnection"><span style="color: white"><i class="fas fa-sign-out-alt"></i></span></a>
					<!--/Dropdown primary-->
					<li class="nav-item dropdown"  >
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
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
      <div class="col-6 border" style="background-image: url(img/gray-elephant-3739343.jpg);height: 1000px;background-size: cover;">
        <h2 class="mb-3 text-white text-center mt-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; " >Help us, make a donation</h2>
        <div class="offset-2 col-8 text-white" style="margin-top: 600px;">
          <h1 class="mb-3 " style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 75px;" >He will never forget you</h1>
        </div></div>
      <div class="col-6" style="background-color: rgb(214, 131, 36);">
        <form class="col-8 offset-2 mt-5" method="POST" action="authentification.php">
          <h1 class="text-center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Sign up</h1>
          <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="firstName">
            <label for="materialLoginFormEmail" class="text-white">First Name</label>
          </div>
          <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="lastName">
            <label for="materialLoginFormEmail" class="text-white">Last Name</label>
          </div>
          <div class="md-form">
            <input type="email" id="materialLoginFormEmail" class="form-control" name="mail">
            <label for="materialLoginFormEmail" class="text-white">E-mail</label>
          </div>
          <div class="md-form">
            <input type="password" id="materialLoginFormEmail" class="form-control" name="password">
            <label for="materialLoginFormEmail" class="text-white">Password</label>
          </div>

          <div class="md-form">
            <input type="password" id="materialLoginFormEmail" class="form-control" name="password_verification">
            <label for="materialLoginFormEmail" class="text-white">Verification Password</label>
          </div>
          <button class="btn btn-black rounded" style="margin-left: 180px;" type="submit" name="validation" >Sign up</button>
          </form>
      </div>
    </div>
  </div>



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
