<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petition Form</title>
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
    <link rel="stylesheet" href="css/style_page_petition.css">
    </head>

    <body>
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
        <a class="btn-floating btn-lg" title="Cart" data-toggle="modal" data-target="#modalCart"><span style="color: white"><span style="font-size:0.6em;" id="nbreItems"></span><i class="fas fa-shopping-cart"></i></span></a>
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
                  <i id="test" class="fas fa-user"></i>
                </a>
                <div  class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default"  aria-labelledby="navbarDropdownMenuLink-333">
                  <div id="warning1"></div>
                  
                  <div id="loginDiv"></div>
                </div>
              </li>
        </ul>
        </div>
    </nav>
    

          <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 offset-md-3 mb-3 mt-5 titre text-center"><h1>THE PETITIONS</h1></div>
          </div>
            <div class="row mt-5 mb-5">    
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 col-sm-12 carte_petition">

                    <!--Card Narrower-->
                    <div class="card card-cascade narrower">

                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img src="img/gorilla.jpg" class="card-img-top"
                        alt="narrower">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <form action="" method="POST">
                      <div class="card-body card-body-cascade">
                        <!--Title-->
                        <h4 class="card-title">Gorilla</h4>
                        <!--Text-->
                        <p class="card-text" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quos voluptas fugit ratione officia, error ipsam nobis delectus reiciendis, quisquam cumque aperiam eius in cum dignissimos assumenda quia aut voluptate!</p>
                        <div id="disapear1" class="d-flex justify-content-center">
                          <!--<input type="hidden" value="2" name="idPetition">-->
                              <!--<input type="hidden"  name="validation_petition">-->
                              <input  onclick="btn(1)" id="1"  value="SIGN"  class="btn btn-unique btn btn-blue-grey signPet" >
                            </div>
                             <p id="answers1" class="card-text"></p>
                      </div>
                    </form>
                    <!--/.Card content-->

                    </div>
                    <!--/.Card Narrower-->

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 carte_petition">

                    <!--Card Narrower-->
                    <div class="card card-cascade narrower">

                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img src="img/giraffe_card.jpg" class="card-img-top"
                        alt="narrower">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <form action="" >
                      <div class="card-body card-body-cascade">
                          <!--Title-->
                          <h4 class="card-title">Giraffe</h4>
                          <!--Text-->
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nemo est expedita, vitae doloremque optio quos voluptates placeat fugit quisquam labore ea! Ut necessitatibus explicabo facere error nesciunt, quod quas.</p>
                            <div id="disapear2" class="d-flex justify-content-center">
                              <!--<input type="hidden" value="2" name="idPetition">-->
                              <!--<input type="hidden"  name="validation_petition">-->
                              <input  onclick="btn(2)" id="2"  value="SIGN"  class="btn btn-unique btn btn-blue-grey mx-auto signPet" >
                            </div>
                             <p id="answers2" class="card-text"></p>
                          
                      </div>
                    </form>
                    <!--/.Card content-->

                    </div>
                    <!--/.Card Narrower-->

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 carte_petition">

                    <!--Card Narrower-->
                    <div class="card card-cascade narrower">

                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img src="img/chimpanzee.jpg" class="card-img-top"
                        alt="narrower">
                        <a>
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <form action="" >
                      <div class="card-body card-body-cascade">
                          <!--Title-->
                          <h4 class="card-title">Chimpanzee</h4>
                          <!--Text-->
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ducimus provident quaerat dolores repellendus, sequi nisi. Doloribus soluta dignissimos reprehenderit molestias alias, repudiandae libero, tempora perferendis facilis, saepe magni rem?</p>
                          <div id="disapear3" class="d-flex justify-content-center">
                           <!--<input type="hidden" value="2" name="idPetition">-->
                              <!--<input type="hidden"  name="validation_petition">-->
                              <input  onclick="btn(3)" id="3"  value="SIGN"  class="btn btn-unique btn btn-blue-grey signPet" >
                            </div>
                             <p id="answers3" class="card-text"></p>
                      </div>
                    </form>
                    <!--/.Card content-->

                    </div>
                    <!--/.Card Narrower-->

                </div>
                <!-- Grid column -->
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
          <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>  
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
        <script type="text/javascript" src="js/petition.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/shop.js"></script>
    
    </body>   
</html>    