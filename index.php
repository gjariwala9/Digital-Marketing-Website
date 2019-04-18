<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	//header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	//header("location: login.php");
  }
  $queryString="";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- IMPORTANT META TAG -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>AdWorld</title>

    <!-- fav icon -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css" type="text/css">

    <!-- Owl Carosuel -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="index.php">Adworld</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catagories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php echo '<a class="dropdown-item" href="catagory.php?cat=restaurant">Restaurants</a>';  ?>
                        <?php echo ' <a class="dropdown-item" href="catagory.php?cat=electronic">Electronics</a>' ?>
                        <?php echo '<a class="dropdown-item" href="catagory.php?cat=shopping">Shopping</a>'?>
                        <?php echo '<a class="dropdown-item" href="catagory.php?cat=automotive">Automotive</a>'?>
                        <div class="dropdown-divider"></div>
                        <?php echo  '<a class="dropdown-item" href="catagory.php?cat=other">More catagories</a>' ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <?php  if (isset($_SESSION['username'])) : ?>
      			
	                <li class="nav-item dropdown" style="margin-left: 600px">
	                	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  		<?php echo $_SESSION['username']; ?>
	                	</a>
		                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                    <a class="dropdown-item" href="profile.php">Profile</a>
		                    <div class="dropdown-divider"></div>
		                    <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
		                </div>
	                
	                </li>
                <?php endif ?>
            </ul>

            <?php  if (!isset($_SESSION['username'])) : ?>
                <div id="login">
	                <a href="login.php"><button class="btn btn-login btn-general" id="btn-login" type="button">Login</button></a>
	                <a href="register.php"><button class="btn btn-sign-up btn-general" id="btn-sign-up" type="button">Sign Up</button></a>
            	</div>
            <?php endif ?>
        </div>
    </nav>

    <section id="home">

        <!-- Bcakground img -->
        <div id="home-bg"></div>

        <!-- Home Content -->
        <div id="home-content">

            <div id="home-content-inner" class="text-center">

                <div id="home-heading">
                    <h1 id="home-heading">Digital</h1>
                    <h1 id="home-heading">Marketing<span> Agency</span></h1>
                </div>

                <div id="home-heading-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in nihil minima unde qui nihil minima.</p>
                </div>

                <div class="container">
                    <br />
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form method="GET" action="catagory.php">
                                <div class="row no-gutters align-items-center">
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" name="cat" placeholder="Search" required/>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-primary" id="btn-search" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->

                    </div>

                </div>
            </div>
        </div>
        <a href="#why-us" id="angle-down"><i class="fas fa-angle-down"></i></a>
    </section>

    <section id="why-us">

        <div class="container">
            <div class="row">
                <h1 id="why-us-heading" class="text-center col-md-12">Why <span>Us?</span></h1>
            </div>
            <div class="row features">
                <p class="col-md-6 why-us-icon"><i class="fas fa-store-alt"></i></p>
                <div class="col-md-6">
                    <h2 class="why-us-heading-2 text-center">One Stop Platform</h2>
                    <p class="why-us-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                </div>
            </div>
            <div class="row features">
                <div class="col-md-6">
                    <h2 class="why-us-heading-2 text-center">Connect To World</h2>
                    <p class="why-us-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                </div>
                <p class="col-md-6 why-us-icon"><i class="fas fa-globe-americas"></i></p>
            </div>
            <div class="row features">
                <p class="col-md-6 why-us-icon"><i class="fas fa-user-friends"></i></p>
                <div class="col-md-6">
                    <h2 class="why-us-heading-2 text-center">Easy To Use</h2>
                    <p class="why-us-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                </div>
            </div>
        </div>

    </section>

    <section id="hot-business">

        <div class="container">

            <div class="row">
                <h1 id="hot-business-heading" class="text-center col-md-12"><span>Hot</span> Businesses</h1>
            </div>

            <div class="row">
                <div class="owl-carousel owl-theme" id="hot-business-slider">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/hot-businesses/ccd.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cafe Coffee Day</h5>
                            <p class="card-text">Cafe.</p>
                            <p class="card-text">Mumbai, Maharashtra.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/hot-businesses/bmw.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">BMW</h5>
                            <p class="card-text">Car Showroom.</p>
                            <p class="card-text">Surat, Gujarat.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/hot-businesses/croma.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Croma</h5>
                            <p class="card-text">Electronic Showroom.</p>
                            <p class="card-text">Ahemdabad, Gujarat.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/hot-businesses/gopal.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gopal House</h5>
                            <p class="card-text">Restaurant</p>
                            <p class="card-text">Surat, Gujarat.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/hot-businesses/nike.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Nike</h5>
                            <p class="card-text">Clothing.</p>
                            <p class="card-text">Surat, Gujarat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="catagories">

        <div class="container">
            <div class="row">
                <h1 id="catagories-heading" class="col-md-12 text-center">Catagories</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="catagories-div">
                        <?php  echo '<a href="catagory.php?cat=restaurant">
                            <p class="catagories-icons text-center"><i class="fas fa-utensils"></i></p>
                            <p class="text-center">Restaurants</p>
                        </a>' ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="catagories-div">
                        <?php echo '<a href="catagory.php?cat=cloth">
                            <p class="catagories-icons text-center"><i class="fas fa-shopping-bag"></i></p>
                            <p class="text-center">Clothings</p>
                        </a>' ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="catagories-div">
                        <?php echo  '<a href="catagory.php?cat=sport">
                            <p class="catagories-icons text-center"><i class="fas fa-futbol"></i></p>

                            <p class="text-center">Sports</p>

                        </a>'?>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="catagories-div">
                        <?php echo '<a href="catagory.php?cat=electronic">

                            <p class="catagories-icons text-center"><i class="fas fa-mobile-alt"></i></p>

                            <p class="text-center">Electronics</p>

                        </a>'?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="catagories-div">
                        <?php  echo '<a href="catagory.php?cat=automotive">
                            <p class="catagories-icons text-center"><i class="fas fa-car"></i></p>
                            <p class="text-center">Automotive</p>
                        </a>' ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="catagories-div">
                        <?php  echo '<a href="catagory.php?cat=other">
                            <p class="catagories-icons text-center"><i class="fas fa-ellipsis-h"></i></p>

                            <p class="text-center">More Catagories</p>

                        </a>' ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="testimonial">

        <div class="container">
            <div class="row">
                <h2 class="text-center col-md-12" id="testimonial-heading">Testimonials</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <blockquote>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        <cite><img src="img/customer/customer-1.jpg">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        <cite><img src="img/customer/customer-2.jpg">Joana Silva</cite>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        <cite><img src="img/customer/customer-3.jpg">Milton Chapman</cite>
                    </blockquote>
                </div>
            </div>
        </div>

    </section>


    <section id="write-us">

        <div class="row">
            <h1 class="text-center col-md-12" id="write-us-heading">Get In <span>Touch</span></h1>
        </div>

        <div class="container" id="contact-form">

            <form>
                <h3>Send Message</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="Phone No.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Message"></textarea>
                </div>
                <div id="submit-div" class="text-center">
                    <a class="btn btn-general" id="btn-submit" href="#" title="Text" role="button">Submit</a>
                </div>

            </form>

        </div>

    </section>

    <section id="footer">

        <div class="row">

            <p class="text-center col-md-12">Copyright &copy; AdWorld</p>

        </div>

    </section>

    <!-- jquery -->
    <script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>

    <!-- FontAwesome -->
    <script src="js/FontAwesome/fontawesome.min.js" type="text/javascript"></script>

    <!-- Owl Carosuel-->
    <script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>

    <!-- Custom Javascript -->
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>