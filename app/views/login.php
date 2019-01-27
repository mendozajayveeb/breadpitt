<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>
	
	<div class="container">
		<section class="login-page my-5">
			<div class="col-sm-6 offset-sm-3">
				<form>
					<h3 class="mb-5 text-center">Log on to your Account</h3>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username">
						<span class="validation text-danger"></span>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password">
						<span class="validation"></span>
					</div>

					<div class="text-center py-4">
						<button type="button" class="btn" id="login">Login</button>
					</div>
					<p class="text-center"><small><a href="./register.php">Don't have an account?</a></small></p>
				</form>
			</div>
		</section>
	</div> <!-- end container -->

<?php } ?>