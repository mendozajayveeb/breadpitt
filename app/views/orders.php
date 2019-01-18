<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {
		global $conn;
	?>

	<div class="container">
		<h4>Orders Admin Page</h4>
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<table class="table table-striped">
					<thead>
						<th>Transaction Code</th>
						<th>Status</th>
						<th>Actions</th>
					</thead>

					<tbody>
						<?php 
							$order_query = "SELECT o.id, o.transaction_code, o.status_id, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id);";
							$orders = mysqli_query($conn, $order_query);
							foreach($orders as $order){
								// var_dump($order);
						 ?>
						 <tr>
						 	<td>order transaction code</td>
						 	<td>order status</td>
						 </tr>
						<?php } ?>
					</tbody>
				</table> <!-- end table -->
			</div> <!-- end columns -->
		</div> <!-- end row -->
	</div> <!-- end container -->



<?php } else {
	header('Location: ./error.php');
} ?>
<?php } ?>