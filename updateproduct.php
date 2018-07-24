<?php
include("db.php");



$item_name=$_POST['item_name'];
$prd_num= $_POST['prd_num'];
$qty_item=$_POST['qty_item'];
$qty = $_POST['qty'];

mysqli_query('SELECT * tbl_sales');
mysqli_query('SELECT * tbl_inventory');

$sql = "UPDATE tbl_sales SET qty_item= $qty_item WHERE id=$prd_num ";


header("location: sales.php");
?>