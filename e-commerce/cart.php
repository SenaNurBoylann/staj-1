
<?php

echo 'Sepetiniz';

for ($i=0; $i < count($product) ; $i++) { 
		   <tr>
				<td><?=$product[$i]['id']?></td>
				<td><?=$product[$i]['name']?></td>
				<td><?=$product[$i]['category_id']?></td>
				<td><?=$product[$i]['stock_amount']?></td>
				<td><?=$product[$i]['price']?></td>
				<td><img style="max-height: 50px; max-width:50px ;" src="https://www.w3schools.com/w3images/lights.jpg" alt=""/></td>
			</tr>
}

foreach($cart as $key => $cartItem  ){
	if ($cartItem['product_id']==$product['id']) {
		

        if($cartItem['total_quantity']+1<=$product['stock_amount']){
           $cart[$key]['total_quantity']+=1;
           $cart[$key]['total_price']=(float)$product['price']*$cart[$key]['total_quantity'];
           $_SESSION['cart'] = $cart;


}
}
?>