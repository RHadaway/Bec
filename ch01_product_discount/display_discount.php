<?php
    // get the data from the form
    $product_description = $_POST['product_description'];
    $nPriceWithHST = $_POST['list_price'];
    $nHST = $_POST['discount_percent'];
    
    // calculate the discount
	$nOriginal = $nPriceWithHST / (1+$nHST*.01);
	
	$sPriceWithHST = "$".number_format($nPriceWithHST, 2);
	$sOriginal = "$".number_format($nOriginal, 2);
	$sHSTAmount = "$".number_format($nPriceWithHST - $nOriginal, 2);
	$sHST = number_format($nHST. "%");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Amount without HST</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>Total Price w HST:</label>
        <span><?php echo $nPriceWithHST; ?></span><br />

        <label>HST:</label>
        <span><?php echo $sHST; ?></span><br />

        <label>HST $ Amount:</label>
        <span><?php echo $sHSTAmount; ?></span><br />

        <label>Price:</label>
        <span><?php echo $sOriginal; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>