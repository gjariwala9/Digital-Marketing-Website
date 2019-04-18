
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>


<?php 
	$username = $_SESSION['username'];
	$con=mysqli_connect("localhost","root","","registration");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con,"SELECT * FROM details where username = '$username'");


	$row = mysqli_fetch_array($result)
	
?>

<!DOCTYPE html>
<html>
<head>
	<!-- IMPORTANT META TAG -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css" type="text/css">
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">-->

    <!-- Owl Carosuel -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="profile.css">

    
</head>
<body style="background-color: #000">
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

        </div>
    </nav>
    
    <div class="row">
		<div class="small-12 medium-2 large-2 columns">
			<div class="circle">
				<!-- User Profile Image -->
				<img class="profile-pic" src="<?php echo $row['photo'] ?>">

			<!-- Default Image -->
			<!-- <i class="fa fa-user fa-5x"></i> -->
			</div>
			<div class="p-image">
				<form id="form" action="upload.php" method="post" enctype="multipart/form-data">
					<i class="fa fa-camera upload-button"></i>
					<input id="file" class="file-upload" name="uploadimage" type="file" accept="image/*"/>
				</form>
			</div>
		</div>
	</div>

	<section id="des">
		<div class="container">
			<div class="row">
                <h1 id="why-us-heading" class="text-center col-md-12">
                	<?php echo $row['company']; ?>
                </h1>
            </div>
            <div class="container">
            	<div class="row">
            		<p>Contact No.: <?php echo $row['contact']; ?></p>
            	</div>
            	<div class="row">
            		<h4 class="text-center">About</h4>
            	</div>
            	<div class="row">
            		<p class="text-center"><?php echo $row['description']; ?></p>
            	</div>
            	<div class="row">
            		<h4 class="text-center">Address</h4>
            	</div>
            	<div class="row">
            		<p class="text-center"><?php echo $row['address']; ?></p>
            	</div>
        	</div>
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

	<script type="text/javascript" src="profile.js"></script>
	<script type="text/javascript">
		document.getElementById("file").onchange = function() {
    		document.getElementById("form").submit();
		};
		
	</script>
	<script type="text/javascript">
		
			var x = document.getElementsByClassName("profile-pic").src;
		alert(x);
		if(typeof x !== 'undefined')
			$(".p-image").hide();	
		
    	
    </script>
</body>
</html>

<?php mysqli_close($con); ?>