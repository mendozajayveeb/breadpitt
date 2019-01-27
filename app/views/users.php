<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 

if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {

global $conn;
?>

	<div class="container">
		<section class="user-page my-5">
			<h4 class="text-center">User Admin Page</h4>
			<div class="row">
				<div class="col-sm-8 offset-sm-2">
					<table class="table table-responsive table-striped">
						<thead>
							<tr class="text-center">
								<th>Username</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Role</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT u.id, u.username, u.firstname, u.lastname, u.email, r.name FROM users u JOIN roles r ON(u.roles_id = r.id)";
								$results = mysqli_query($conn, $sql);

								foreach($results as $result){
									echo "<tr>
											<td>".$result['username']."</td>
											<td>".$result['firstname']."</td>
											<td>".$result['lastname']."</td>
											<td>".$result['email']."</td>
											<td>".$result['name']."</td>
											<td>";
											if($result['name'] == 'Admin'){
												if($result['id'] == 1){
													echo "<a href='../controllers/grant_admin.php?id=".$result['id']."' class='btn disabled text-dark'>Default Admin</a>";
												} else {
													echo "<a href='../controllers/grant_admin.php?id=".$result['id']."' class='btn btn-remove text-dark'>Revoke Admin</a>";
												}
												
											} else {
												echo "<a href='../controllers/grant_admin.php?id=".$result['id']."' class='btn text-dark'>Set as Admin</a>";
											}
											"</td>
										</tr>";
								}
							?>
						</tbody>
					</table>

				</div> <!-- end cols -->
			</div> <!-- end row -->
		</section>
	</div><!--  end container -->







<?php } else {
	header('location: ./error.php');
} ?>

<?php } ?>