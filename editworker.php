<?php include('header.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="addcat.css">
</head>
<?php include('navbar.php'); ?>

<body>


    <!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
        </div>
        <?php
        $id = $_GET['id'];
        $int = (int)$id;
        $query = "SELECT * FROM workers WHERE id=$int";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_row($result);
        $array = array_values($user);
        ?>
        <form method="post">
            <h3>UPDATE WORKER</h3>
            <?php include('errors.php'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="workername" class="form-control" placeholder="Worker Name *" value="<?php echo $array[2] ?>" />

                    </div>
                    <div class="form-group">
                        <?php
                        $id = $array[1];
                        $int = (int)$id;
                        $query = "SELECT * FROM category WHERE categoryid=$int";
                        $result = mysqli_query($db, $query);
                        $user = mysqli_fetch_row($result);
                        $array2 = array_values($user);
                        ?>
                        <label for="categories">Choose Category:(Previous--><?php echo $array2[1] ?>)</label>
                        <select name="category" id="category" class="form-control">
                            <?php

                            $sql = "select * from category";
                            $query = $db->query($sql);
                            while ($row = $query->fetch_array()) {
                            ?>
                                <option value=" <?php echo $row['categoryid'] ?>"> <?php echo $row['catname'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="price" class="form-control" placeholder="$200" value="<?php echo $array[3] ?>" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="updateworkerbtn" class="btnContact " value="UPDATE" />
                    </div>
                </div>
        </form>
    </div>



</body>

</html>