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
                            Category Title
                        </th>
                        <th>
                            Category Description
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $sql = "select * from category order by categoryid asc";
                    $query = mysqli_query($db,$sql);
                    if ($query) {
                    while ($row = $query->fetch_array()) {
                    ?>




                        <tr>
                            <td data-title='Category Title'>
                                <?php echo $row['catname'] ?>
                            </td>
                            <td data-title='Category Description'>
                                <?php echo $row['description'] ?>
                            </td>
                            <td class='select'>

                                <form method='POST'>
                                    <input type="hidden" name="id" value="<?php echo $row['categoryid'] ?>" >
                                    <button class='btn btn-primary' type=submit name="edit" >
                                        Edit
                                    </button>
                                </form>
                            </td>
                            <td class='select'>
                                <form method='POST'>
                                    <input type="hidden" name="id" value="<?php echo $row['categoryid'] ?>" >
                                    <button class='btn btn-danger' type=submit name="delete">
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