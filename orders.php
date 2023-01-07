<?php include('header.php'); ?>
<?php include('server.php'); ?>
<style>
    <?php include('cat.css'); ?>
</style>
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->

<body style="color: white;background-color: #5bb9b8;">
    <?php include('navbar.php'); ?>

    <div class="container">

        <h1 class="page-header text-center">All Orders</h1>

        <main>
            <table>
                <thead>
                    <tr>
                        <th>
                            Order By
                        </th>
                        <th>
                            Order To
                        </th>
                        <th>
                            Note to Worker
                        </th>
                        <th>
                            Order Date
                        </th>
                        <th>
                            Total Price (PKR)
                        </th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $sql = "select * from orders";
                    $query = $db->query($sql);
                    if ($query) {
                    while ($row = $query->fetch_array()) {
                    ?>

                        <tr>
                            <td data-title='Order By'>
                                <?php echo $row['orderby'] ?>
                            </td>
                            <td data-title='Order To'>
                                <?php echo $row['orderto'] ?>
                            </td>
                            <td data-title='Note to Worker'>
                                <?php echo $row['ordernote'] ?>
                            </td>
                            <td data-title='Order Date'>
                                <?php echo $row['date'] ?>
                            </td>
                            <td data-title='Total Price (PKR)'>
                                <?php echo $row['totalprice'] ?>
                            </td>
                            <td>
                                <?php
                                    $orderid = $row['id'];
                                if ($row['status'] == '0') {

                                    echo "<form method='POST'>".
                                    "<input type='hidden' name='id' value='$orderid'>".
                                    "<button class='btn btn-danger' type='submit' name='changestatus'>".
                                        "Confirm".
                                    "</button>".
                                "</form>";
                                    } else {
                                    echo "<button class='btn btn-success'>" .
                                        "Confirmed" .
                                        "</button>";
                                } ?>
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