<?php include('server.php') ?>
<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="addcat.css">
    <title>Document</title>
</head>
<body>
<?php include('navbar.php') ?>
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
            <?php 
            $id = $_GET['id'];
            $int = (int)$id;
            $query = "SELECT * FROM category WHERE categoryid=$int";
            $result = mysqli_query($db, $query);
            $user = mysqli_fetch_row($result);
            $array = array_values($user);
            ?>
                <h3>UPDATE CATEGORY</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="catname" class="form-control" placeholder="Category Title *" value="<?php echo $array[1]?>" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="catdesc" class="form-control" placeholder="Category Description *" value="<?php echo $array[2]?>" required />
                        </div>

                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $id ?>" >
                            <input type="submit" name="catedit" class="btnContact " value="UPDATE" />
                        </div>
                </div>
            </form>
</div>
</body>
</html>