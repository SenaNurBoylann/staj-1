<?php
session_start();
require_once('mysqlClient.php');
$db = new MysqlClient();
if(isset($_GET['category_id'])){
$sorgu = $db->getClient()->query('SELECT * FROM product WHERE category_id ='.$_GET['category_id']);	
}
else{
$sorgu = $db->getClient()->query('SELECT * FROM product ');
}

$product = $sorgu->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> </title>
	<style type="text/css">
		th{ text-align:left;}
	</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</head>
<body>
 <div class="container pt-5">
 	<div>
 		
 	</div>	

	<h1>Categorys</h1>

	<table class="table">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>category_id</th>
				<th>stock_amount</th>
				<th>price</th>
			</tr>
		</thead>
		<tbody>
			
			
<?php
for ($i=0; $i < count($product) ; $i++) { 
?>	

			<tr>
				<td><?=$product[$i]['id']?></td>
				<td><?=$product[$i]['name']?></td>
				<td><?=$product[$i]['category_id']?></td>
				<td><?=$product[$i]['stock_amount']?></td>
				<td><?=$product[$i]['price']?></td>
				<td><img style="max-height: 50px; max-width:50px ;" src="https://www.w3schools.com/w3images/lights.jpg" alt=""/></td>
                <td><a href= "addcart.php?product=<?= $product[$i]["id"]?>" class="btn btn-primary btn-block addToCartBtn" role="button">
				<span class="glyphion-shopping-cart"></span> Sepete Ekle
				</a></td>
				
			</tr>
				
<?php
}
?>			
				
     
				<ul>
					<li>
						<a href="index.php">  Tümü </a>
					</li>
					<?php
				  foreach($db->getClient()->query('select * from category')->fetchAll(PDO::FETCH_ASSOC) as $row) { ?>
				<li><a href="index.php?category_id=<?php echo $row['id'];?>" class="list-group-item"><?php echo $row['name'];?></a> </li>
					<?php } ?>
				 </ul> 	

				</div>
				<div id="categorys">
					<h2>

                    
                    <li>
						<a href="cart.php">  Sepetiniz </a>
					</li>

<div class="navbar-nav ms-auto">
				<div id="main">
				
				

	<?php
	


	  
	 $cart = $_SESSION['cart']?? [];

        $toplam = 0;
	    foreach ($cart as $cartItem){
	    	$toplam += (int)$cartItem["total_quantity"];
	    }
	     ?>	
	    

				</div>
				<div class="toplam">
					Genel Toplam: <?= $toplam ?> Adet Ürün
                </div>
                
                        </div>
  </tbody>
</table>
        <?php
if ($_GET['status'] == "error"){
            echo "<script> alert('Stok miktarını aştınız') </script>";
        }
        ?>
</body>
</html>