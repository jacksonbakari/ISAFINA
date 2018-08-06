<?php 
if (isset($_GET["pdf"])&& isset($_GET["id"])) {
	require_once 'pdf.php';
	include ('databse_connection.php');
	$output='';
	$statement=$connect->prepare("SELECT * FROM invoice WHERE inv_id=:invoiceID LIMIT 1");
	$statement->execute(
		array(
			':invoiceID' => $_GET["id"]
		)
	);
	$result=$statement->fetchAll();
	foreach ($result as $row) {
		$output.='
		<table width="100%" border="1" cellpadding="5" cellspacing="0">
 	<tr>
 		<td colspan="2" align="center" style="font-size:18px"><b>Invoice</b></td>
 	</tr>
 	<tr>
 		<td colspan="2">
 			<table width="100%" cellpadding="5">
 				<tr>
 					<td width="65%">
 						To: <br>
 						<b>RECEIVER(invoce to)</b> <br>
 						Name:'.$row["ororder_receiver_name"].' <br>
 					</td>
 					<td width="35%">
 						Reverse Charge <br>
 						Invoce No.:'.$row["order_no"].'<br> 
 						Invoce Date:'.$row["order_date"].'
 					</td>
 				</tr>
 			</table>
 			<br/>
 			<table width="100%" border="1" cellspacing="0" cellpadding="5">
 				<tr>
 					<th>Sr No.</th>
 					<th>Item name</th>
 					<th>Quality</th>
 					<th>Price</th>
 					<th>Actual</th>
 					<th colspan="2">Tax1 (%)</th>
 					<th colspan="2">Tax2 (%)</th>
 					<th colspan="2">Tax3 (%)</th>
 					<th colspan="2">Total</th>
 				</tr>
 				<tr>
 					<th></th>
 					<th></th>
 					<th></th>
 					<th></th>
 					<th></th>
 					<th>Rate</th>
 					<th>Amt</th>
 					<th>Rate</th>
 					<th>Amt</th>
 					<th>Rate</th>
 					<th>Amt</th>
 				</tr>';
 				$statement=$connect->prepare("SELECT * FROM tbl_order_item WHERE inv_id=:invoiceID LIMIT 1");
				$statement->execute(
				array(
				':invoiceID' => $_GET["id"]
					)
				);
				$item_result=$statement->fetchAll();
				$count=0;
				foreach($item_result as $sub_row)
				{
					$count++;
					$output.='
					<tr>
						<td>'.$count.'</td>
						<td>'.$sub_row["item_name"].'</td>
						<td>'.$sub_row["order_item_quality"].'</td>
						<td>'.$sub_row["order_item_price"].'</td>
						<td>'.$sub_row["order_item_actual_amount"].'</td>
						<td>'.$sub_row["order_item_tax1_rate"].'</td>
						<td>'.$sub_row["order_item_tax1_amount"].'</td>
						<td>'.$sub_row["order_item_tax2_rate"].'</td>
						<td>'.$sub_row["order_item_tax2_amount"].'</td>
						<td>'.$sub_row["order_item_tax3_rate"].'</td>
						<td>'.$sub_row["order_item_tax3_amount"].'</td>
						<td>'.$sub_row["order_item_final_amount"].'</td>
					</tr>
					';
				}		
				$output .='
				<tr>
					<td align="right" colspan="11"><b>Total</b></td>
					<td align="right"><b>'.$row["order_total_after_tax"].'</b></td>
				</tr>
				<tr>
					<td align="right" colspan="11"><b>Total Amt before tax:</b></td>
					<td align="right">'.$row["order_total_before_tax"].'</td>
				</tr>
				<tr>
					<td align="right" colspan="11">Tax1 :</td>
					<td align="right">'.$row["order_total_tax1"].'</td>
				</tr>
				<tr>
					<td align="right" colspan="11">Tax2 :</td>
					<td align="right">'.$row["order_total_tax2"].'</td>
				</tr>
				<tr>
					<td align="right" colspan="11">Tax3 :</td>
					<td align="right">'.$row["order_total_tax3"].'</td>
				</tr>
				';
				$output .='	
 			</table>
 		</td>
 	</tr>
 </table>
		';
	}

	$pdf = new Pdf();
	$file_name='Invoce-'.$row["order_no"].'pdf';
	$pdf->loadHtml($output);
	$pdf->reder();
	$pdf->stream($file_name,array("Attachment"=>false));
}

 ?>


 