<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	global $conn;  ?>

	<div class="container">
		<section class="register-page my-5">
			<div class="col-sm-10 offset-sm-1">
			<form>
				<h3 class="mb-5 text-center">Sign up for an Account</h3>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" id="firstname" class="form-control" name="firstname">
							<span class="validation text-danger"></span>
						</div>

						<div class="form-group">
							<label for="lastname">Last Name</label>
							<input type="text" id="lastname" class="form-control" name="lastname">
							<span class="validation text-danger"></span>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" class="form-control" name="email">
							<span class="validation text-danger"></span>
						</div>

						<div class="form-group mb-5">
							<label for="address">Address</label>
							<input type="text" id="address" class="form-control" name="address">
							<span class="validation text-danger"></span>
						</div>
					</div> <!-- end left side -->

					<div class="col-sm-6">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" id="username" class="form-control" name="username">
							<span class="validation text-danger"></span>
						</div>					

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password">
							<span class="validation text-danger"></span>
						</div>					

						<div class="form-group">
							<label for="confirm_password">Confirm Password</label>
							<input type="password" id="confirm_password" class="form-control" name="confirm_password">
							<span class="validation text-danger"></span>
						</div>	
					</div> <!-- end right side -->
				</div> <!-- end row -->

				<div class="text-center py-4">
					<button id="add_user" type="button" class="btn">Register</button>
				</div>
					<p class="text-center"><a href="./login.php"> Already have an account? </a></p>
			</form> <!-- end form -->
			
		</div>
		</section>

	</div> <!-- end container -->



<?php } ?>