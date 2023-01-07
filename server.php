<?php
if (isset($_SESSION['adminname'])) {
} else {
  session_start();
}

// initializing variables
$adminname = "";
$email    = "";
$catname  = "";
$description    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'gwdatabase');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $adminname = mysqli_real_escape_string($db, $_POST['adminname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($adminname)) {
    array_push($errors, "Admin Name is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same adminname and/or email
  $user_check_query = "SELECT * FROM admins WHERE adminname='$adminname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['adminname'] === $adminname) {
      array_push($errors, "Admin Name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO admins (adminname, email, password , date) 
  			  VALUES('$adminname', '$email', '$password',current_timestamp())";
    mysqli_query($db, $query);
    $_SESSION['adminname'] = $adminname;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $frmadminname = mysqli_real_escape_string($db, $_POST['adminname']);
  $frmpassword = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($frmadminname)) {
    array_push($errors, "Admin Name is required");
  } else if (empty($frmpassword)) {
    array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
    $frmpassword = md5($frmpassword);
    $query = "SELECT * FROM admins WHERE adminname='$frmadminname' AND password='$frmpassword'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results)) {
      $_SESSION['adminname'] = $frmadminname;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    } else {
      array_push($errors, "Wrong Admin Name/password combination");
    }
  }
}





if (isset($_POST['catadd'])) {
  // receive all input values from the form
  $catname = mysqli_real_escape_string($db, $_POST['catname']);
  $catdesc = mysqli_real_escape_string($db, $_POST['catdesc']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($catname)) {
    array_push($errors, "Category Title is required");
  }
  if (empty($catdesc)) {
    array_push($errors, "Category Description is required");
  }



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO category (catname, description) 
  			  VALUES('$catname', '$catdesc')";
    mysqli_query($db, $query);
    // header('location: index.php');
  }
}



// delete category
if (isset($_POST['delete'])) {

  $did = $_POST['id'];
  $query = "DELETE FROM category WHERE categoryid=$did";
  mysqli_query($db, $query);
}

// edit category
if (isset($_POST['edit'])) {

  $eid = $_POST['id'];
  header("location: editcategory.php?id=$eid");
}

if (isset($_POST['catedit'])) {

  $eid = $_POST['id'];
  $catname = mysqli_real_escape_string($db, $_POST['catname']);
  $catdesc = mysqli_real_escape_string($db, $_POST['catdesc']);
  $query = "UPDATE category SET catname='$catname',description='$catdesc' WHERE categoryid=$eid";
  mysqli_query($db, $query);
  header("location: allcategories.php");
}

// add worker
if (isset($_POST['addworkerbtn'])) {

  $workername = mysqli_real_escape_string($db, $_POST['workername']);
  $cid = mysqli_real_escape_string($db, $_POST['category']);
  $pr = mysqli_real_escape_string($db, $_POST['price']);
  $price = (int)$pr;
  $catid = (int)$cid;
  $query = "INSERT INTO workers (catid,workername,price,date) VALUES('$catid','$workername','$price',current_timestamp())";
  mysqli_query($db, $query);
  header("location: addworker.php");

}

//delete worker
if (isset($_POST['deleteworker'])) {

  $did = $_POST['id'];
  $query = "DELETE FROM workers WHERE id=$did";
  mysqli_query($db, $query);
}

// edit worker
if (isset($_POST['editworker'])) {

  $eid = $_POST['id'];
  header("location: editworker.php?id=$eid");
}

if (isset($_POST['updateworkerbtn'])) {

  $eid = $_GET['id'];
  $workername = mysqli_real_escape_string($db, $_POST['workername']);
  $cid = mysqli_real_escape_string($db, $_POST['category']);
  $pr = mysqli_real_escape_string($db, $_POST['price']);
  $price = (int)$pr;
  $catid = (int)$cid;
  $query = "UPDATE workers SET catid='$catid',workername='$workername',price='$price' WHERE id=$eid";
  mysqli_query($db, $query);
  header("location: allworkers.php");
}
// change order status
if (isset($_POST['changestatus'])) {

  $oid = $_POST['id'];
  $orderid = (int)$oid;
  $query = "UPDATE orders SET status=1 WHERE id=$orderid";
  mysqli_query($db, $query);
}