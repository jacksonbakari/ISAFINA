<?php 
if (isset($_GET['delete'])&& isset($_GET['id'])) {
	$statement=$connect->prepare("DELETE * FROM invoice WHERE inv_id=:invoiceID");
	$statement->execute(
		array(':invoiceID' => $_GET['invoiceID'])
	);

	$statement=$connect->prepare("DELETE * FROM tbl_order_item WHERE inv_id=:invoiceID");
	$statement->execute(
		array(':invoiceID' => $_GET['invoiceID'])
	);
header("Location:inv.php");
}
 ?>