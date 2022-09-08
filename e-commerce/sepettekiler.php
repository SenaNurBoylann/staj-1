<?php 
//include "addcart.php";
?>
<h1>Sepettekiler</h1>
<ul>
	<?php
	    $sepettekiler = $_COOKIE['sepettekiler'];

	    $product = explode(",", $sepettekiler);
	    $total_price = 0,
	    foreach ($product as $urun){
	    	echo '<li>ürün #'. $urun.' - fiyatı: '.$prices[$urun].'</li>';
	    	$total_price += $prices[$urun];
	    }
	 ?>

</ul>

<h2>Toplam Fiyat: <?php echo $total_price; ?></h2>
<form action="" metho="post">
	<input type="hidden" name="token">
	<input type="submit" value="Satın Al">
	
</form>