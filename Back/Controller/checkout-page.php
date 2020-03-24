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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

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
			  <a class="nav-link" href="#">Home
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
				  <button class="btn btn-info btn-block my-4 btn btn-blue-grey" type="submit" name="validation">Sign in</button>
			  
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

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="firstName" class="form-control">
                    <label for="firstName" class="">First name</label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="lastName" class="form-control">
                    <label for="lastName" class="">Last name</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <div class="md-form input-group pl-0 mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
              </div>

              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                <label for="email" class="">Email (optional)</label>
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="1234 Main St">
                <label for="address" class="">Address</label>
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="Apartment or suite">
                <label for="address-2" class="">Address 2 (optional)</label>
              </div>

              <!--Grid row-->
              <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                      <label for="country">Country</label>
                      <select class="custom-select d-block w-100" id="country" required>
                        <option value="">Choose...</option>
                        <option>France</option>
                        <option>Wakanda</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                      <label for="state">State</label>
                      <select class="custom-select d-block w-100" id="state" required>
                        <option value="">Choose...</option>
                        <option>Hauts de France</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                      <label for="zip">Post Code</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required>
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                      

                    </div>
                      <div class="col-md-6 mb-3">
                        <label for="cc-name">City</label>
                        <input type="text" class="form-control" id="city" placeholder="" required>
                        <small class="text-muted">Compulsory</small>
                        <div class="invalid-feedback">
                          Enter a valid city
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        
                      </div>
                    
                    <!--Grid column-->

            </div>
              <!--Grid row-->

              <hr>

             
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
              </div>

              <hr>

             
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Enter the amount in Points</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">please enter the exact amount</small>
                  <div class="invalid-feedback">
                    Enter the amount in Points
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  
                </div>
              </div>
              
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block btn btn-blue-grey" type="submit">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-primary badge-pill numero">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">12 Points</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">8 Points</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">5 Points</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-5 Points</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>20 Points</strong>
            </li>
          </ul>
          <!-- Cart -->

          <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0 btn btn-blue-grey" type="button">Redeem</button>
              </div>
            </div>
          </form>
          <!-- Promo code -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
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
