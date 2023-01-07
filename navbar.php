<nav class="navbar navbar-default" style="background-color: #5bb9b8;">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>Get Work System</b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Add Category</a></li>
        <li><a href="addworker.php">Add Worker</a></li>
        <li><a href="allcategories.php">All Categories</a></li>
        <li><a href="allworkers.php">All Workers</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="sales.php">Sales</a></li>
        <li style="margin-left: 96px;"><a style="color:mediumblue ;">Welcome <?php echo $_SESSION['adminname']; ?></a></li>
        <li><a href="index.php?logout='1'" style="float: right;">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>