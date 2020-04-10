<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require 'path/to/PHPMailer/src/Exception.php';
//require 'path/to/PHPMailer/src/PHPMailer.php';
//require 'path/to/PHPMailer/src/SMTP.php';
session_start();

	if(!empty($_POST)){
		extract($_POST);
		$valid =true;
		if (isset($_POST['contact'])){
			$name = (string) htmlentities(trim($name));
			$email = (string) htmlentities(trim($email));
			$subject =  (string)htmlentities(trim($subject));
			$message = (string) htmlentities(trim($message));

			if(empty($name)){
				$valid=false;
				$er_name=("please enter a name");
			}
			if(empty($email)){
				$valid=false;
				$er_email=("please enter an email");
			}elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)){
				$valid=false;
				$er_email="please enter a valid email";
			}
			if(empty($subject)){
				$valid=false;
				$er_subject="please enter a subject in order give a response";
			}
			if(empty($message)){
				$valid=false;
				$er_message=("please enter a message");
			}
			if($valid){

				$message= new PHPMailer();

				$to = "antoineulysse@gmail.com";
	
				$header = 'MiME-Version: 1.0' . "\r\n";
				$header .= 'Content-type: text\html; charset="utf-8"'. "\r\n";
				$header .= 'Content-Transfer-Encoding: 8bit';
				$header .= 'To: vous <'. $to .'>'. "\r\n";
				$header .= 'From: ' .$name. ', <' .$email. '>'. "\r\n";
	
				$message = "<html>
							<head>
								<title>Contact</title>
							</head>
							<body>
								<p>
									".$name . ' ,sujet:'.$subject. 'Bonjour, vous avez reçu un message ' .$message. "
								</p>
							</body>
							</html>";
				
	
				if ($valid=true){
					echo 'ok'; 
					mail($to, $subject, $message, $header);
				}else{
					echo 'nok';
				}
				header('Location: ');
				exit;
			}
		}	
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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/nav.css">
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
<!--/.Navbar -->

		<!--Section: Contact v.2-->
		<section class="mb-4">

  		<!--Section heading-->
 
  		<!--Section description-->
		<div class="texte">
			<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
			<p class="text-center w-responsive mx-auto mb-5">We are a fundation in order to help species in danger from Africa, we think that you are able to help them via a petition or a donation.<br> if you have any question please contact us with the form below</p>
			<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
				a matter of hours to help you.</p>
		</div>
  		<div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" method="POST">

              <!--Grid row-->
              <div class="row">
				<?php if(isset($er_name)){ ?>
					<div class="alert alert-danger" role="alert"><?php echo $er_name ?></div>
				<?php } ?>
                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" value="<?php if(isset($name)){ echo $name;} ?>">
                          <label for="name" class="">Your name</label>
                      </div>
                  </div>
                  <!--Grid column-->
				  <?php	if(isset($er_email)){ ?>
				<div class="alert alert-danger" role="alert"><?php echo $er_email ?></div>
				<?php	} ?>
                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control" value="<?php if(isset($email)){ echo $email;} ?>">
                          <label for="email" class="">Your email</label>
                      </div>
                  </div>
				  <!--Grid column-->
              </div>
              <!--Grid row-->
			  	<?php	if(isset($er_subject)){ ?>
					<div class="alert alert-danger" role="alert"><?php echo $er_subject ?></div>
				<?php	}?>
              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control" value="<?php if(isset($subject)){ echo $subject;} ?>">
                          <label for="subject" class="">Subject</label>
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
				<div class="row">
					<?php	if(isset($er_message)){ ?>
						<div class="alert alert-danger" role="alert"><?php echo $er_message ?></div>
					<?php	}?>
					<!--Grid column-->
					<div class="col-md-12">

						<div class="md-form">
							<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" value="<?php if(isset($message)){ echo $message;} ?>"></textarea>
							<label for="message">Your message</label>
						</div>

					</div>
				</div>
			  <!--Grid row-->
			  <div class="text-center text-md-left">
              	<button type="submit" class="btn btn-primary btn btn-blue-grey" name="contact" >Send</button>
          	  </div>
				  <div class="status"></div>
		</form>		  
      </div>

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Robert Fundation, Roubaix-Kigali </p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>08 36 65 65 65</p>
              </li>

              <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>contact@robertfundation.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  		</div>

</section>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Your custom scripts (optional) -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/shop.js"></script>
</body>
</html>
