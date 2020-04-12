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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/shop.css">
</head>
<body>
 <!-- navbar -->
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
              <a  href="checkout-page.php" class="btn btn-primary">Checkout</a>
						</div>
					</div>
					</div>
				</div>

					<a class="btn-floating btn-lg " id="deconnection"><span style="color: white"><i class="fas fa-sign-out-alt"></i></span></a>
						<!--Dropdown primary-->
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
  <!--/.Navbar -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-sm-12">
  
      <!--Card Narrower-->
      <div class="card card-cascade narrower">
  
        <!--Card image-->
        <div class="view view-cascade overlay">
          <img src="img/giraffe_toy.jpg" class="card-img-top"
            alt="narrower">
        
        </div>
        <!--/.Card image-->
  
        <!--Card content-->
        <div class="card-body card-body-cascade">
          <h5 class="blue-grey-text"><i class="fas fa-hippo"></i> Shop</h5>
          <!--Title-->
          <h4 class="card-title">the Giraffe</h4>
          <!--Text-->
          <p class="card-text">Wonderful giraffe toy<br> 45.99 pts </p>
          <a id='1' class="add btn btn-unique btn btn-blue-grey">add to basket</a>
        </div>
        <!--/.Card content-->
  
      </div>
      <!--/.Card Narrower-->
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-sm-12">
  
      <!--Card Narrower-->
      <div class="card card-cascade narrower">
  
        <!--Card image-->
        <div class="view view-cascade overlay">
          <img src="https://images.pexels.com/photos/138963/pexels-photo-138963.jpeg?cs=srgb&dl=cute-monkey-play-stuffed-toy-138963.jpg&fm=jpg" class="card-img-top"
            alt="narrower">
          
        </div>
        <!--/.Card image-->
  
        <!--Card content-->
        <div class="card-body card-body-cascade">
          <h5 class="blue-grey-text"><i class="fas fa-hippo"></i> Shop</h5>
          <!--Title-->
          <h4 class="card-title">Small Chimpanzee</h4>
          <!--Text-->
          <p class="card-text">Cute Little Monkey <br> 29.99pts</p>
          <a id='2' class=" add btn btn-unique btn btn-blue-grey">Add to basket</a>
        </div>
        <!--/.Card content-->
  
      </div>
      <!--/.Card Narrower-->
  
    </div>
    <!-- Grid column -->
    <div class="col-lg-4 col-sm-12">
  
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
            <h5 class="blue-grey-text"><i class="fas fa-hippo"></i> Shop</h5>
            <!--Title-->
            <h4 class="card-title">Small stuffed Robert</h4>
            <!--Text-->
            <p class="card-text">clever small ferret but not as the real Robert <br> 24.99 pts</p>
            <a id='3' class=" add btn btn-unique btn btn-blue-grey">Add to basket</a>
          </div>
          <!--/.Card content-->
        </div>
        <!--/.Card Narrower-->
      </div>
  </div>
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-sm-12">
  
      <!--Card Narrower-->
      <div class="card card-cascade narrower">
  
        <!--Card image-->
        <div class="view view-cascade overlay">
          <img src="https://images.pexels.com/photos/633496/pexels-photo-633496.jpeg?cs=srgb&dl=a-fourrure-a-l-interieur-a-poils-animal-633496.jpg&fm=jpg" class="card-img-top"
            alt="narrower">
        
        </div>
        <!--/.Card image-->
  
        <!--Card content-->
        <div class="card-body card-body-cascade">
          <h5 class="blue-grey-text"><i class="fas fa-hippo"></i> Shop</h5>
          <!--Title-->
          <h4 class="card-title">The Hedgehog</h4>
          <!--Text-->
          <p class="card-text">don't with Sonic this one is very slow <br> 19.99 pts</p>
          <a id='4' class=" add btn btn-unique btn btn-blue-grey">Add to basket</a>
        </div>
        <!--/.Card content-->
  
      </div>
      <!--/.Card Narrower-->
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-sm-12">
  
      <!--Card Narrower-->
      <div class="card card-cascade narrower">
  
        <!--Card image-->
        <div class="view view-cascade overlay">
          <img src="https://images.pexels.com/photos/104344/pexels-photo-104344.jpeg?cs=srgb&dl=vacances-texture-animal-reflet-104344.jpg&fm=jpg" class="card-img-top"
            alt="narrower">
          
        </div>
        <!--/.Card image-->
  
        <!--Card content-->
        <div class="card-body card-body-cascade">
          <h5 class="blue-grey-text"><i class="fas fa-hippo"></i> Shop</h5>
          <!--Title-->
          <h4 class="card-title">Stuffed Toys</h4>
          <!--Text-->
          <p class="card-text">A baby monkey with a star <br> 24.99 pts</p>
          <a id='5' class=" add btn btn-unique btn btn-blue-grey">Go to Shop</a>
        </div>
        <!--/.Card content-->
  
      </div>
      <!--/.Card Narrower-->
  
    </div>
    <!-- Grid column -->
    <div class="col-lg-4 col-sm-12">
  
        <!--Card Narrower-->
        <div class="card card-cascade narrower">
    
          <!--Card image-->
          <div class="view view-cascade overlay">
            <img src="https://images.pexels.com/photos/1373908/pexels-photo-1373908.jpeg?cs=srgb&dl=couleurs-gros-plan-jouet-jouet-en-peluche-1373908.jpg&fm=jpg" class="card-img-top"
              alt="narrower">
            
          </div>
          <!--/.Card image-->
    
          <!--Card content-->
          <div class="card-body card-body-cascade">
            <h5 class="blue-grey-text"><i class="fas fa-hippo"></i> Shop</h5>
            <!--Title-->
            <h4 class="card-title">small Dog</h4>
            <!--Text-->
            <p class="card-text">A tired dog <br>29.99 pts</p>
            <a id='6' class=" add btn btn-unique btn btn-blue-grey">Add to Basket</a>
          </div>
          <!--/.Card content-->
        </div>
        <!--/.Card Narrower-->
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
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js"
	integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/shop.js"></script>
</body>
</html>
