<?php include 'server.php'; ?>
<?php  if (!isset($_SESSION['username'])) : header('location:login.php')?>
		
<?php endif?>
<!DOCTYPE html>

<html>

<head>
    <title>GetWorkSystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        <?php include 'Home.css'; ?>
    </style>

    <style>
        /* <?php include 'font-awesome/6.1.1/css/all.min.css'; ?> */
    </style>

    <script src="https://kit.fontawesome.com/e285160353.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="bg-home">

    <a class="signupbtn" href="index.php?logout='1'">Logout</a> 
        <button class="signinbtn"><?php echo $_SESSION['username']; ?></button>

        <div class="logo">
            <?php echo '<a href="#"><img class="logo-img" src="getwork.png" /></a>'; ?>

        </div>


        <div>

            <ul>
                <li1><a href="" style="color: #03b2c9;">Home</a></li1>

                <li2><a href="Discover.php" style="color: #03b2c9;">Discover</a></li2>


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
    </div>




    <div>

        <?php include 'footer.php'; ?>

    </div>

</body>

</html>