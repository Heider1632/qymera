<?php
if(!isset($_SESSION['id'])){
		header('location: index.php');
}else{

	require 'core/model/admin.php';
	$admin = new Admin();

	include 'views/overall/header.php';

	include 'views/admin/home.php';

	include 'views/overall/scrips.php';
}
?>
