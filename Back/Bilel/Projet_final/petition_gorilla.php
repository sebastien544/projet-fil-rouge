<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petition Gorilla</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
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
				<form class="text-center border border-light p-5" action="#!">
	  
				  <p class="h4 mb-4">Sign in</p>
			  
				  <!-- Email -->
				  <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
			  
				  <!-- Password -->
				  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
			  
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
				  <button class="btn btn-info btn-block my-4 btn btn-blue-grey" type="submit">Sign in</button>
			  
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
    
    
    
    
    
    
    
    
    
    
    <div class="container-fluid" style="background-image: url(img/gorille.jpg);background-size: cover; height: 100%;background-position: center;">
      <div class="row">
        <div class="offset-2 col-4 text-white" style="margin-top: 165px; margin-left: 100px;">
          <h1 class="mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >HELP US TO HELP THEM</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam ut cupiditate asperiores voluptate id praesentium libero porro inventore laborum sunt maiores, exercitationem animi. Consectetur quasi non voluptatibus iste magnam blanditiis.</p>
        </div>
        <!-- Material form register -->
<div class="card" style="margin-top: 165px; margin-bottom: 70px; margin-left: 520px;">

    <h5 class="card-header white-text text-center py-4">
        <strong style="color :black">Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">First name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="email" id="materialRegisterFormLastName" class="form-control">
                        <label for="materialRegisterFormLastName">Last name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters and 1 digit
                </small>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">Phone number</label>
                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Optional - for two step authentication
                </small>
            </div>

            <!-- Newsletter -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            <!-- Social register -->
            <p>or sign up with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a>

            <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
        
      </div>
    </div>
    









    <footer class="page-footer font-small blue-grey pt-4">
      <div class="container">
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
      </div>
    </footer>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
    new WOW().init();
    </script>
  </body>
</html>