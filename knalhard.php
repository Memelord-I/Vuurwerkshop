<!DOCTYPE html>
<html>
<head>
<title>Chorro - Contact</title>
<div class= "header"></div>
<div class= "winkelwagen"></div>  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.php'?>
</div>
<div id="product-grid">
	<div class="txt-heading">Producten</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC WHERE rank='hard'");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "&euro;".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Winkelmand" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
		
	<?php
		}
	}
	?>
	
</div>
</div>
	
</div>
<?php include 'footer.php';?>

</body>
</html>