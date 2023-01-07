<?php include 'server.php'; ?>
<?php  if (!isset($_SESSION['username'])) : header('location:login.php')?>
		
<?php endif?>
<!DOCTYPE html>
<html>

<head>
    <title>GetWorkSystem</title>

    <style>
        <?php include 'Address.css'; ?>
        <?php include 'Home.css'; ?>
    </style>

</head>

<body>

    <div style="overflow: hidden;">
    <a class="signupbtn" href="index.php?logout='1'">Logout</a> 
        <button class="signinbtn"><?php echo $_SESSION['username']; ?></button>

        <div class="logo">
            <?php echo '<a href="#"><img class="logo-img" src="getwork.png" /></a>'; ?>

        </div>


        <div>

            <ul>
                <li1><a href="Home.php" style="color: #03b2c9;">Home</a></li1>

                <li2><a href="Discover.php" style="color: #03b2c9;">Discover</a></li2>

                <li3><a href="cat.php" style="color: #03b2c9;">Services</a></li3>

                <li4><a href="Terms and Conditions.php" style="color: #03b2c9;">Terms and Conditions</a></li4>

                </li4>
                <li5><a href="" style="color: #03b2c9;">About</a>
                    <ul>
                        <li><a href="Address.php" style="color: #03b2c9;">Address</a></li>

                        <li><a href="" style="color: #03b2c9;">Contacts</a></li>
                    </ul>
                </li5>
            </ul>

        </div>


        <div class="container tb" style="margin-top: 12%;">
            <h2 class="address">Contacts</h2>
            <ul class="responsive-table">
                <li class="table-header li">
                    <div class="col col-2">Mr.Danial Hanif </div>
                    <div class="col col-3">FYP Supervisior</div>
                </li>
                <li class="table-row li">
                    <div class="col col-2">Muhammad Usama Iqbal </div>
                    <div class="col col-3" data-label="Amount">S21RDOCS2M01028</div>
                </li>

            </ul>
        </div>
    </div>




    <div style="margin-top: 8.7%;">

        <?php include 'footer.php'; ?>

    </div>




</body>

</html>