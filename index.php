<?php 
  session_start(); 

  if (!isset($_SESSION['adminname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['adminname']);
  	header("location: login.php");
  }
?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cat.css">
</head>
<?php include('navbar.php'); ?>

<body >



    <!-- logged in user information -->
    <?php  if (isset($_SESSION['adminname'])) : ?>

<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            
            <form method="post">
                <h3>Add Category</h3>
				<?php include('errors.php'); ?>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="catname" class="form-control" placeholder="Category Title *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="catdesc" class="form-control" placeholder="Category Description *" value="" />
                        </div>

                        <div class="form-group">
                            <input type="submit" name="catadd" class="btnContact " value="ADD" />
                        </div>
                </div>
            </form>
</div>
		

    <?php endif ?>
		
</body>
</html>