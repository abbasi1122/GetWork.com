<?php include 'server.php'; ?>
<?php  if (!isset($_SESSION['username'])) : header('location:login.php')?>
		
<?php endif?>
<!DOCTYPE html>
<html>

<head>
  <title>GetWorkSystem</title>
  <style>
    <?php include 'Home.css'; ?>
  </style>
</head>

<body >
  <div style="background:url('Terms and Conditions.jpeg');height:100%;margin:0;background-position: center;background-repeat: no-repeat;background-size: cover;overflow: hidden;">
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

        <li4><a href="" style="color: #03b2c9;">Terms and Conditions</a></li4>

        </li4>
        <li5><a href="" style="color: #03b2c9;">About</a>
          <ul>
            <li><a href="Address.php" style="color: #03b2c9;">Address</a></li>

            <li><a href="Contact.php" style="color: #03b2c9;">Contacts</a></li>
          </ul>
        </li5>
      </ul>

    </div>
    <div>
    <?php

echo "<h1 style='color:red; padding-left:70%;padding-top:10%'>
Terms and Conditions
</h1>";
echo "<p style=' padding-left:65%;'>

- Get Work provides the platform to get working experts for there work.<br>
- When client makes an request for the expert and if request is accept by the organization or expert then contract 
  is created between the client and the organization.<br>
- Client have to pay the service fee online to expert or organization through Bank Account/Jazzcash/Easypaisa 
account.<br>
- Once the Services are complete, the client must provide notice of that on the Get Work Platform.<br>
- Once the Services are complete, the expert or organization must provide notice of that on the Get Work 
Platform.<br> 
- After the Contract is completed, the parties are encouraged to review and provide feedback of the Services.<br>
- Get Work only permits individuals over 18 years of age to become clients.<br>
- Clients have to give some description about their request for work.<br>

</p>";
?>
    </div>
  </div>




  <div>

    <?php include 'footer.php'; ?>

  </div>




</body>

</html>