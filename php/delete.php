<?php
include('db.php');
if(isset($_GET['gal_id'])){
	$id = $_GET['gal_id'];
	$sql = $db->query("delete from gallery where id='$id'") or die(mysqli_error());
	header("location:up_gallery.php?del=del");	
}
if(isset($_GET['item_id'])){
	$id = $_GET['item_id'];
	$sql = $db->query("delete from main_menu where item_id='$id'") or die(mysqli_error());
	header("location:add_main_menu_items.php?del=del");	
}
?>