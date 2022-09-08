<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

	    error_reporting(E_ALL ^ E_NOTICE);
	 ini_set('error_reporting' , E_ALL ^ E_NOTICE);
	    include_once 'mysqlClient.php';

	    foreach($db->query('SELECT * FROM product') as $row){
	    	$vmenuid = $_GET['category_id'];
	    	if($vmenuid==$row['categoru_id']) { ?>

	    		<table class="display">

	    			<tr>
	    				<td><?php echo $row['name']; ?></td>td<br>
	    				<td><?php echo $row['stock_amount']; ?></td>td<br>
	    				<td><?php echo $row['price']; ?></td>td<br>

	    			</tr>
	    		</table>
	    	<?php

	    	    }}

	    	 ?>   



</body>
</html>