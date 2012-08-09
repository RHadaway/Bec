<?php
    // get the data from the form
    $future_worth = $_POST['future_worth'];
    $SPPWF = $_POST['SPPWF'];
    $the_result = $_POST['the_result'];

    // validate investment entry
    if ( empty($future_worth) ) {
        $error_message = 'Investment is a required field.'; 
    } else if ( !is_numeric($future_worth) )  {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $future_worth <= 0 ) {
        $error_message = 'Investment must be greater than zero.';        
    // validate interest rate entry
    } else if ( empty($SPPWF) ) {
        $error_message = 'Interest rate is a required field.'; 
    } else if ( !is_numeric($SPPWF) )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $SPPWF <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.';   
	} else if ( $interest_rate >= 15) {
        $error_message = 'Interest rate must be less than 15%.';	
	// validate year entry
	}else if ( $years <= 0 || $years > 50) {
		$error_message = 'Years must be 0 to 50 years.';	
    // set error message to empty string if no invalid entries
    } else {
        $error_message = '';
    }
	

	
    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    // calculate the future value
	$future_value = $investment;
    $SPPWF = 1.0 / pow(1.0 + $interest_rate, $number_of_years);
	$the_result = $future_value * $SPPWF;

    // apply currency and percent and date formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
	$date = date('Y-m-d');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $future_worth; ?></span><br />

        <label>SPPWF:</label>
        <span><?php echo $SPPWF; ?></span><br />

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br />

        <label>Future Value:</label>
        <span><?php echo the_result; ?></span><br />
		
		  <span><?php echo $date; ?></span><br />
    </div>
</body>
</html>