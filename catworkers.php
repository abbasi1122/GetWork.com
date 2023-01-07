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
        $query = "SELECT * FROM category WHERE categoryid=$int";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_row($result);
        $array = array_values($user);
        ?>
		<h1 class="page-header text-center">WORKERS(Category--><?php echo $array[1]?>)</h1>

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
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php

					$sql = "select * from workers WHERE catid=$int";
					$query = $conn->query($sql);
					while ($row = $query->fetch_array()) {
					?>

						<tr>
							<td data-title='Worker Name'>
								<?php echo $row['workername'] ?>
							</td>
							<td data-title='Price (PKR)'>
								<?php echo $row['price'] ?>
							</td>
							<td class='select'>
								<form action="" method="post">

									<input type="hidden" name='id' value="<?php echo $row['id'];?>">
									<button class='btn btn-success' type="submit" name="selectworker" >
										Select
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