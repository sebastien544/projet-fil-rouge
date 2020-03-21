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
      <a class="navbar-brand" href="#">Save-Them.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
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
            <a class="nav-link" href="../Antoine/php/shop_03.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Antoine/php/contactus.php">About us</a>
          </li>
          <li class="nav-item">
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-sm-left dropdown-default"
              aria-labelledby="navbarDropdownMenuLink-333">
              <form class="text-center border border-light p-5" action="#!">
                <p class="h4 mb-4">Sign in</p>
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
            <div class="d-flex justify-content-around">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                      <a href="">Forgot password?</a>
                    </div>
                </div>
            <button class="btn btn-info btn-block my-4 btn btn-blue-grey" type="submit">Sign in</button>
            <p>Not a member?
                  <br> <a href="">Register</a>
                </p>
            </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
    
    
    
    
    
    
    
    
    
    <div class="container-fluid" style="background-image: url(img/gorilla.jpeg);background-size: cover; height: 100%;background-position: center;">
      <div class="row">
        <div class="offset-2 col-4 text-white" style="margin-top: 200px;">
          <h1 class="mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >HELP US TO HELP THEM</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam ut cupiditate asperiores voluptate id praesentium libero porro inventore laborum sunt maiores, exercitationem animi. Consectetur quasi non voluptatibus iste magnam blanditiis.</p>
        </div>
        <form class="bg-white col-3 offset-1 rounded p-4" style="margin-top: 100px;">
          <h6 class="text-center">your donation</h6>
          <h3 class="text-center">150p</h3>
          <h6 class="mt-4">Select donation amount</h6>
         <button class="btn btn-blue-grey btn-sm" style="width: 70px; height: 40px;" type="button">25</button>
          <button class="btn btn-blue-grey btn-sm" style="width: 70px; height: 40px;" type="button">50</button>
          <button class="btn btn-blue-grey btn-sm" style="width: 70px; height: 40px;" type="button">150</button>
          <button class="btn btn-blue-grey btn-sm" style="width: 70px; height: 40px;" type="button">500</button>
          <input class="form-control font-weight-bold" type=text placeholder="Amount">
          <h6 class="mt-4">Frequency</h6>
          <select class="form-control mb-4 font-weight-bold">
            <option>One time</option>
            <option>Monthly</option>
          </select>
          <h6 class="mt-4">Animal</h6>
          <select class="form-control mb-4 font-weight-bold">
            <option>Gorilla</option>
            <option>Tiger</option>
          </select>
          <input class=" btn-block btn-blue-grey" type="submit" placeholder="Submit">
        </form>
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
