<?php include('header.php'); ?>
<?php include('server.php'); ?>
<style>
    <?php include('cat.css'); ?>
</style>
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->

<body style="color: white;background-color: #5bb9b8;">
    <?php include('navbar.php'); ?>

    <div class="container">
        <h1 class="page-header text-center">CATEGORIES</h1>

        <main>
            <table>
                <thead>
                    <tr>
                        <th>
                            Worker Name
                        </th>
                        <th>
                            Work Category
                        </th>
                        <th>
                            Price
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $sql = "select * from workers";
                    $query = $db->query($sql);
                    if ($query) {
                    while ($row = $query->fetch_array()) {
                
                        $id = $row['catid'];
                        $int = (int)$id;
                        $query2 = "SELECT * FROM category WHERE categoryid=$int";
                        $result = mysqli_query($db, $query2);
                        $user = mysqli_fetch_row($result);
                        $array = array_values($user);
                        ?>

                        <tr>
                            <td data-title='Worker Name'>
                                <?php echo $row['workername'] ?>
                            </td>
                            <td data-title='Work Category'>
                                <?php echo $array[1] ?>
                            </td>
                            <td data-title='Price'>
                                <?php echo $row['price'] ?>
                            </td>
                            <td class='select'>

                                <form method='POST'>
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <button class='btn btn-primary' type=submit name="editworker">
                                        Edit
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method='POST'>
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <button class='btn btn-danger' type=submit name="deleteworker">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>


                    <?php
                    }
                }
                    ?>
                </tbody>
            </table>
        </main>

    </div>
</body>

</html>