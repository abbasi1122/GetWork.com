<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive footer design codepen</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
.footer-bottom h3{
    background: #fcfcfc;
    font-family: sans-serif;
}
footer{
    /* position: absolute; */
    overflow: hidden;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    /* width: 100vw; */
    padding-top: 5px;
    color: #fff;
}
.footer-content{
    /* display: flex; */
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2rem;
    text-transform: capitalize;
    /* line-height: 3rem; */
    
}

.socials{
    list-style: none;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
    
}

.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 10px;

    border-radius: 100%;

}

.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 20px;
    padding-bottom: 50px;
    text-align: center;
    box-sizing: border-box;

}
.footer-bottom p{
float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}


.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}


.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
	background: #ff3333;
	color:white;
}

.fa-linkedin {
	background:  #4d4dff;
	color:white;
}
.fa-pinterest {
	background: #ff3333;
	color:white;}

@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}

    </style>
</head>
<body >
    <footer>
        <div class="footer-content">
            <h3>Follow Us On</h3>
            <ul class="socials">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-pinterest"></a>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">Muhammad Usama Iqbal</a>  </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="">Home</a></li>
                        <li><a href="Discover.php">Discover</a></li>
                        <li><a href="cat.php">Services</a></li>
                        <li><a href="Terms and Conditions.php">Terms and Conditions</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="Address.php">Address</a></li>
                        <li><a href="Contact.php">Contacts</a></li>
                      </ul>
                    </div>
        </div>

    </footer>
</body>
</html>
