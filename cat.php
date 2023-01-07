<?php include('header.php'); ?>
<?php include('server.php'); ?>
<style>
	<?php include('cat.css'); ?>
</style>

<body>
	<?php include('navbar.php'); ?>

	<div class="container">
		
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
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php

					$sql = "select * from category order by categoryid asc";
					$query = $conn->query($sql);
					if($query){
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
								<form action="" method="post">

									<input type="hidden" name='id' value="<?php echo $row['categoryid'];?>">
									<button class='btn btn-success' type="submit" name="selectcat" >
										Select
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
<footer>
	<center>Copyright © Muhammad Usama Iqbal</center>
</footer>

</html>