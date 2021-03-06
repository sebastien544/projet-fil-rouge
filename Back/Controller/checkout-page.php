<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Save-them.com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
  </head>

  <body onload="recuperer()">

    <!--Navbar -->
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
  <!--/.Navbar -->
  <div class="container"> 
		<div class="row">
      <!--Main layout-->
      <main class="mt-5 pt-4">
        <div class="container wow fadeIn">

          <!-- Heading -->
          <h2 class="my-5 h2 text-center">Checkout</h2>

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-lg-6 col-md-6  col-sm-7 mb-4">

              <!--Card-->
              <div class="card">

                <!--Card content-->
                <form class="card-body" id="checkout">
                  <h2 class="text-center">Delivery Form</h2>
                  <!--Grid row-->
                  <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-2">

                      <!--firstName-->
                      <div class="md-form">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First name" name="firstname" required>
                      </div>

                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                    <div class="col-md-6 mb-2">

                      <!--lastName-->
                      <div class="md-form">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last name" name="lastname" required>
                      </div> 

                    </div>
                    <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--email-->
                  <div class="md-form mb-5">
                    <input type="email" name="email" id="email" class="form-control" placeholder="youremail@example.com">
                    <label for="email" class="">Email (optional)</label>
                  </div>

                  <div class="md-form mb-5">
                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Your phone number">
                    <label for="phone" class="">Phone number</label>
                  </div> 

                  <!--address-->
                  <div class="md-form mb-5 ">
                      <input type="text" name="address" id="address" class="form-control " placeholder="Main St">
                      <label for="address" class="">Address</label>
                  </div>

                  <!--address-2-->
                  <div class="md-form mb-5">
                    <input type="text" name="addresse-2" id="address-2" class="form-control" placeholder="Apartment or suite">
                    <label for="address-2" class="">Address 2 (optional)</label>
                  </div>

                  <!--Grid row-->
                  <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
                          <label for="validationDefault05">Country</label>
                          <input type="text" class="form-control" id="validationDefault05" placeholder="Country" required>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">
                          <label for="validationDefault04">State</label>
                          <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">

                          <label for="zip">Post Code</label>
                          <input name="zip" type="number" class="form-control" id="zip" placeholder="ex: 75000" >
                          <div class="invalid-feedback">
                            Zip code required.
                          </div>
                          

                        </div>
                          <div class="col-md-6 mb-3">
                            <label for="cc-name">City</label>
                            <input name="city" type="text" class="form-control" id="city" placeholder="ex: Paris" >
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
                      <input type="text" class="form-control" id="cc-name" placeholder="" >
                      <small class="text-muted">please enter the exact amount</small>
                      <div class="invalid-feedback">
                        Enter the amount in Points
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      
                    </div>
                  </div>
                  
                  <hr class="mb-4">
                  <button  class="btn btn-primary btn-lg btn-block btn btn-blue-grey" type="submit">Confirm command</button>

                </form>

              </div>
              <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-5 col-md-6 mb-4">

              <!-- Heading -->
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-primary badge-pill numero"></span>
              </h4>

              <table class="table table-hover bg-white rounded shadow mb-3 z-depth-1">
                  <thead>
                    <tr>
                    <th></th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Remove</th>
                    </tr>
                  </thead>
                  <tbody id="cart">
                    <tr><td>Promocode</td></tr>
                    <tr class="total">
                    <th scope="row"></th>
                    <td>Total</td>
                    <td id="total">0</td>
                    <td></td>
                    </tr>
                  </tbody>
                  </table>

              <!-- Promo code -->
              <form class="card p-2">
                <div class="input-group">
                  <input type="text" id="inputCode" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button id="redeem" class="btn btn-secondary btn-md waves-effect m-0 btn btn-blue-grey" type="button">Redeem</button>
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
    </div>
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
  <!-- Footer -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="js/shop.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
