<?php include('server.php') ?>

<?php 

  if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
   header('location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Add Profile</h2>
  </div>
	
  <form method="post" action="addProfile.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Company Name</label>
  	  <input type="text" name="company" value="<?php echo $company; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Description</label>
  	  <textarea cols="55" rows="4" name="description"><?php echo $description ?></textarea>
  	</div>
  	<div class="input-group">
  	  <label>Contact No.</label>
  	  <input type="text" name="contact" maxlength="10" value="<?php echo $contact ?>">
  	</div>
  	<div class="input-group">
      <label>Address</label>
      <textarea cols="55" rows="4" name="address"><?php echo $address ?></textarea>
    </div>
    <div class="input-group">
      <label>Catagory</label>
      <div class="custom-select" style="width:200px;">
        <select name="catagory">
          <option value="select">Select</option>
          <option value="restaurant">Restaurants</option>
          <option value="cloth">Cloths</option>
          <option value="sport">Sports</option>
          <option value="electronic">Electronic</option>
          <option value="automotive">Automotive</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="add_profile">Submit</button>
  	</div>
  </form>
</body>
</html>