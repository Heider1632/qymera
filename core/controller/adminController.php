<?php
if(!isset($_SESSION['id'])){
		header('location: index.php');
}else{

	require 'core/model/admin.php';
	$admin = new Admin();

	include 'views/admin/home.php';
}
?>
