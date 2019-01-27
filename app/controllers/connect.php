<?php 

$host = 'sql12.freemysqlhosting.net';
$username = 'sql12275930';
$password = 'qSTTDpunRl';
$dbname = 'sql12275930';

// $host = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'ecom_db';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'connected succesfully';

 ?>