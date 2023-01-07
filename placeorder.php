<?php include('header.php'); ?>
<?php include('server.php'); ?>
<style>
    <?php include('cat.css'); ?>
</style>

<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <?php
        $id = $_GET['id'];
        $int = (int)$id;
        $queryworkers = "SELECT * FROM workers WHERE id=$int";
        $resultworkers = mysqli_query($db, $queryworkers);
        $userworkers = mysqli_fetch_row($resultworkers);
        $arrayworkers = array_values($userworkers);
        $catid = $arrayworkers[1];
        $catid = (int)$catid;
        $query = "SELECT * FROM category WHERE categoryid=$catid";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_row($result);
        $array = array_values($user);
        ?>
        <h1 class="page-header text-center">Place Order(Category--><?php echo $array[1] ?>)</h1>

        <main>
            <table>
                <thead>
                    <tr>
                        <th>
                            Worker Name
                        </th>
                        <th>
                            Price (PKR)
                        </th>
                        <th>
                            No of Workers
                        </th>
                        <th>
                            Note to Worker
                        </th>

                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $sql = "select * from workers WHERE id=$int";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_array()) {
                    ?>

                        <form action="" method="post">
                            <tr>
                                <td data-title='Worker Name'>
                                <input type="hidden"  name="workername" value="<?php echo $row['workername'] ?>">
                                    <?php echo $row['workername'] ?>
                                </td>
                                <td data-title='Price (PKR)'>
                                <input type="hidden"  name="price" value="<?php echo $row['price'] ?>">
                                    <?php echo $row['price'] ?>
                                </td>
                                <td data-title='No of Workers'>
                                    <input type="number" class="form-control " style="width: 25%;" name='noofworkers' required>
                                </td>
                                <td data-title='Note to Worker'>
                                    <textarea name="notetoworker" cols="20" rows="02" class="form-control" required></textarea>
                                </td>
                                <td class='select'>

                                    <input type="hidden" name='id' value="<?php echo $row['id']; ?>">
                                    <button class='btn btn-success' type="submit" name="placeorder">
                                        Place Order
                                    </button>
                        </form>
                        </td>
                        </tr>


                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>


    </div>
</body>
<footer>
    <center>Copyright © Muhammad Usama Iqbal</center>
</footer>

</html>