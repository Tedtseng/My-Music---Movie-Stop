<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

<!-- Add , Remove , Empty  function -->
<?php
if(!empty($_POST["action"])) {
	switch($_POST["action"]) {
		case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_POST["code"] . "'");
			// $productByCode = $db_handle->runQuery("SELECT * FROM products WHERE product_id='" . $_POST["product_id"] . "'");
			// $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			// $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["product_name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["product_price"]));
			$itemArray = array($productByCode[0]["code"]=>array('desc'=>$productByCode[0]["product_desc"],'pic'=>$productByCode[0]["product_pic"],'name'=>$productByCode[0]["product_name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["product_price"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["code"] == $k)
							$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
		break;
		case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
				if($_POST["code"] == $k)
					unset($_SESSION["cart_item"][$k]);
				if(empty($_SESSION["cart_item"]))
					unset($_SESSION["cart_item"]);
			}
		}
		break;
		case "empty":
		unset($_SESSION["cart_item"]);
		break;		
	}
}
?>


<!-- Shopping cart UI -->
<?php
if(isset($_SESSION["cart_item"])){
	$item_total = 0;
	$sub_total = 0;
	?>	
	<!-- <table cellpadding="10" cellspacing="1"> -->
		<table class="cart">
		<tbody>
			<tr>
				<!-- <th><strong></strong></th>	 -->
				<th class="product-name">Product Name</th>
				<!-- <th class="product-name"><strong>Code</strong></th> -->
				<th class="product-price">Price(each)</th>
				<th class="product-qty">Quantity</th>
				<!-- <th><strong>TEST|Quantity</strong></th> -->
				<th class="product-total">Subtotal</th>
				<!-- <th><strong>TEST|Add cart</strong></th> -->
				<th class="action">Remove Item</th>
			</tr>	
			<?php		
			foreach ($_SESSION["cart_item"] as $item){
				?>
				<tr>
					<!-- <td><img src="<?php echo $item["pic"]; ?>"></td>	 -->
					<!-- Name-table row -->
					<td class="product-name"><?php /*echo $item["name"];*/ ?>
						<div class="product-thumbnail">
							<img src="<?php echo $item["pic"]; ?>">
						</div>
						<div class="product-detail">
							<h3 class="product-title">
								<?php echo $item["name"]; ?>
							</h3>
							<p><?php echo $item["desc"]; ?></p>
						</div>
					</td>

					<!-- <td class="product-name"><?php echo $item["code"]; ?></td> -->
					<!--  -->
				    <!-- <td align=right><?php echo "$".$item["price"]; ?></td> -->
				    <td class="product-price" align=center><?php echo "$".$item["price"]; ?></td>
				    <td class="product-qty" align=center><strong><?php echo $item["quantity"]; ?></strong></td>
				<!--Test | Quantity -->
				<!-- <td class="product-qty">
					<select name="#">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</td> -->
				<!-- <td class="product-qty"> -->
					<!-- <input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" /> -->
					<!-- <input type="number" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity"  size="2"/> -->
				<!-- </td> -->
				
				<!-- total func-->
				<?php
				 $sub_total = ($item["price"]*$item["quantity"]);
				?>
				<td class="product-total" align=center><strong><?php echo "$".$sub_total; ?></strong></td>


				<!-- Remove button -->
				<!-- <td><a onClick="cartAction('remove','<?php echo $item["code"]; ?>')" class="btnRemoveAction cart-action">Remove Item</a></td> -->
				<td class="action" align=center><a onClick="cartAction('remove','<?php echo $item["code"]; ?>')" class="btnRemoveAction cart-action"><i class="fa fa-times"></i></a></td>
			    <!-- <td class="action"><a href="#"><i class="fa fa-times"></i></a></td> -->
			</tr>

		<!-- total func(without shipment fee)-->
		<?php
		$item_total += ($item["price"]*$item["quantity"]);	
	}?>
		<tr>
			<!-- <td colspan="5" align=right><strong>Shipment:</strong></td>
			<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td> -->
		</tr> 

        

	</tbody>
</table>


<!-- total lists UI -->
<section>
        <?php
			$shipment ='5.00';
			$total =$item_total+$shipment;
		?>
		<div class="cart-total">
							<p><strong>Subtotal:</strong> <?php echo "$".$item_total; ?></p>
							<p><strong>Shipment:</strong> <?php echo "$".$shipment; ?></p>
							<p class="total"><strong>Total:</strong><span class="num">$<?php echo $total; ?></span></p>
							<p>
								<a href="#newProduct" class="button muted">Continue Shopping</a>
								<!-- <a href="#" class="button">Finalize and pay</a> -->
								<!-- test Paypal -->
								<!-- <form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post"> -->
								<form target="paypal" name="_xclick" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_xclick">
									<!-- <input type="hidden" name="cmd" value="_s-xclick"> -->
									<!-- <input type="hidden" name="hosted_button_id"> -->
									<input type="hidden" name="business" value="myspace@gmail.com">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="item_name" value="Total Order Prices">
									<input type="hidden" name="amount" value=<?php echo $total; ?>>
									<input class="button" type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" 
									border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
								</form>
								<!-- test Paypal -->
							</p>
							
		</div> <!-- .cart-total -->
</section>

<?php
}
?>
<!-- Shopping cart UI_End -->