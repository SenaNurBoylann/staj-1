
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
				</tr>
<?php
}

?>