<?php include 'server.php'; ?>
<?php  if (!isset($_SESSION['username'])) : header('location:login.php')?>
		
<?php endif?>
<!DOCTYPE html>
<html>

<head>
    <title>GetWorkSystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        <?php include 'Discover.css'; ?>
        <?php include 'Home.css'; ?>
    </style>
</head>

<body>
    <div class="bg-discover" style="background-image: url('Discover.jpeg');">
    <a class="signupbtn" href="index.php?logout='1'">Logout</a> 
        <button class="signinbtn"><?php echo $_SESSION['username']; ?></button>

        <div class="logo">
            <?php echo '<a href="#"><img class="logo-img" src="getwork.png" /></a>'; ?>

        </div>



        <div>

            <ul>
                <li1><a href="Home.php" style="color: #03b2c9;">Home</a></li1>

                <li2><a href="" style="color: #03b2c9;">Discover</a></li2>

                <li3><a href="cat.php" style="color: #03b2c9;">Services</a></li3>

                <li4><a href="Terms and Conditions.php" style="color: #03b2c9;">Terms and Conditions</a></li4>

                </li4>
                <li5><a href="" style="color: #03b2c9;">About</a>
                    <ul>
                        <li><a href="Address.php" style="color: #03b2c9;">Address</a></li>

                        <li><a href="Contact.php" style="color: #03b2c9;">Contacts</a></li>
                    </ul>
                </li5>
            </ul>

        </div>
        <div class="discover-text" >

<?php

echo "<p>With Get Work you will have a chance to get a experts on things that you want.You will find different working 
experts and organizations on Get Work, you can choose the one that you want work with. You don’t need to stay 
online always, just login, browse, make an request.<br>
Details of services , number of each services experts and there charges are available in the services section.</p>";


?>
</div> 
    </div>




    <div>

        <?php include 'footer.php'; ?>

    </div>
</body>



</html>