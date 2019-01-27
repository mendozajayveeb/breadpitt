<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 

	if(!isset($_SESSION['user']) || (isset($_SESSION['user'])) && $_SESSION['user']['roles_id'] == 2) {
?>

<?php 
	require_once '../controllers/connect.php'; 
	global $conn; //refers to the $conn outside the function 
?>

<div class="container">
	<section class="catalog-page">
		<div class="row py-5">
			<!-- categories -->
			<div class="col-sm-2 my-3 col-md-4 col-lg-2">
				<!-- display categories -->
				<h2>Categories</h2>
				<ul class="list-group my-3">
					<a href="catalog.php">
						<li class="text-dark list-group-item"> All </li>
					</a>

					<?php 
						$sql = "SELECT * FROM categories";
						$categories = mysqli_query($conn,$sql);
						foreach ($categories as $category) { ?>
							<a href="catalog.php?category_id=<?php echo $category['id'] ; ?>">
								<li class="text-dark list-group-item">
									<?php echo $category['name']; ?>
								</li>
							</a>
						<?php }	 ?>
				</ul>

				<!-- set a get request on click of the anchor tag -->
				<h2>Sort</h2>
				<ul class="list-group border my-3">
					<a href="../controllers/sort.php?sort=asc">
						<li class="text-dark list-group-item">
							Price(Lowest to Higest)
						</li>
					</a>

					<a href="../controllers/sort.php?sort=desc">
						<li class="text-dark list-group-item">
							Price(Highest to Lowest)
						</li>
					</a>
				</ul>
		

			</div> <!-- end categories -->
			
			<!-- items -->
			<div class="col-sm-10 col-md-8 col-lg-10">
				<div class="container">

					<?php 
						$sql2 = "SELECT * FROM items";

						// filter via category
						if(isset($_GET['category_id'])) {
							$sql2 .=" WHERE category_id =".$_GET['category_id'];
						}

						// display sorted items
						if(isset($_SESSION['sort'])) {
							// var_dump($_SESSION['sort']);
							$sql2 .= $_SESSION['sort'];
						}					

						$items = mysqli_query($conn, $sql2);

						echo "<div class='row'>";

						foreach ($items as $item) { ?>
							<div class="col-sm-3 my-3 col-md-6 col-lg-4">
								<div class="card h-100">
									<img class="card-img-top img-fluid" src="<?php echo $item['img_path']; ?>">
									<div class="card-body">
										<h4 class="card-title">
											<?php echo $item['name']; ?>
										</h4>
										<p class="card-text">
											<?php echo $item['description']; ?>
											<br>
											<?php echo $item['price']; ?>
										</p>
									</div>
									
									<!-- add to cart -->
									<div class="card-footer">
										<input type="number" class="form-control" value="1">
										<button type="submit" class="btn btn-block text-dark add-to-cart mt-2" data-id="<?php echo $item['id']; ?>"> Add to cart</button>
									</div>

								</div> <!-- end card -->
							</div> <!-- end item col -->
						<?php } echo "</div>" ; ?> <!-- end of items row -->		
				</div> <!-- end items container -->
			</div> <!-- end items -->
		</div> <!-- end row -->
	</section>


</div> <!-- end container -->


<?php } else {
	header('Location: ./error.php');
} ?>




<?php }  ?>