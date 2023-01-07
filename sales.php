<?php include('header.php'); ?>
<?php include('server.php'); ?>
<style>
    <?php include('cat.css'); ?>
</style>
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->

<body style="color: white;background-color: #5bb9b8;">
    <?php include('navbar.php'); ?>

    <div class="container">

        <h1 class="page-header text-center">All Time Sales</h1>
        <?php $sql = "select * from orders where status=1";
        $query = $db->query($sql);
        $sum = 0;
        if ($query) {
        while ($row = $query->fetch_array()) {
            $price = (int)$row['totalprice'];
            
            $sum = $sum + $price;
        }
        
        ?>
        <h5>Total No of Orders : <?php echo mysqli_num_rows($query); ?></h5>
        <h5 class=" ">Total Sales (PKR) : <?php echo $sum; ?></h5>
        <h1 class="page-header text-center">All Order Sales</h1>

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

                    $sql = "select * from orders where status=1";
                    $query = $db->query($sql);
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
                                    <button class='btn btn-success'>
                                        Confirmed
                                        </button>
                            </td>
                        </tr>


                    <?php
                    }
                    }else{?>
                        <h1 style="color: red; margin-top:15%;" ><center>No Data to display</center></h3>
                    <?php }
                    ?>
                </tbody>
            </table>
        </main>


    </div>
</body>

</html>