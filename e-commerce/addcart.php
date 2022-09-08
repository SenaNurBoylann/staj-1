

<?php
require_once('mysqlClient.php');

$mysqlClient = new MysqlClient();


session_start();

$product=$mysqlClient->getClient()->query('SELECT * FROM product WHERE id ='.$_GET['product'])->fetch(PDO::FETCH_ASSOC);
$cart=$_SESSION["cart"];
if(empty($cart)||$cart== NULL)
{

	$cart=[[

	"product_id" => $product["id"],
	"product_name" => $product["name"],
	"total_quantity" => 1,
	"total_price" => $product["price"]
          ]];

	$_SESSION['cart'] = $cart;
	header('location: index.php?status=success1');
	session_disconnect();
	exit();
}
   
foreach($cart as $key => $cartItem  ){
	if ($cartItem['product_id']==$product['id']) {
		

        if($cartItem['total_quantity']+1<=$product['stock_amount']){
           $cart[$key]['total_quantity']+=1;
           $cart[$key]['total_price']=(float)$product['price']*$cart[$key]['total_quantity'];
           $_SESSION['cart'] = $cart;
           header('location: index.php?status=success2');
           session_disconnect();
           exit();
        }
        else{

         
        	header('location: index.php?status=error&message=stok miktarını');
        	session_disconnect();
        	exit();
       
        }
		
	}
}
          $cart[]=["product_id" => $product["id"],
	               "product_name" => $product["name"],
	               "total_quantity" => 1,
	               "total_price" => $product["price"]];

          $_SESSION['cart'] = $cart;
	      header('location: index.php?status=success3');
	      session_disconnect();
	      exit();

