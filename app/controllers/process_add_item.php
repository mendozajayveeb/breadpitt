<?php 

session_start();
require_once './connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image = "../assets/images/".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "./".$image);

$sql = "INSERT INTO items(name, price, description, img_path, category_id) VALUES ('$name', '$price', '$description', '$image', '$category_id')";
$res = mysqli_query($conn, $sql);

if($res === TRUE){
	header('Location: ../views/items.php');
} else {
	echo mysqli_error($conn);
}

 ?>