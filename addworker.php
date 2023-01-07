<?php include('header.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="cat.css">
</head>
<?php include('navbar.php'); ?>

<body>


    <!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form">
       
        <form method="post">
            <h3>Add Worker</h3>
            <?php include('errors.php'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="workername" class="form-control" placeholder="Worker Name *" value="" />
                        
                    </div>
                    <div class="form-group">
                    <label for="categories" >Choose Category:</label>
                        <select name="category" id="category" class="form-control">
                        <?php

$sql = "select * from category order by categoryid asc";
$query = $db->query($sql);
while ($row = $query->fetch_array()) {
?>
                            <option  value=" <?php echo $row['categoryid'] ?>"> <?php echo $row['catname'] ?></option>
                            <?php
                    }
                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="price" class="form-control" placeholder="Rs.200/-" value="" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="addworkerbtn" class="btnContact " value="ADD" />
                    </div>
                </div>
        </form>
    </div>



</body>

</html>