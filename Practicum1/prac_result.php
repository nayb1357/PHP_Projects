<!DOCTYPE html PUBLIC "-//W3C//DTD XHML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
			<title>Practicum-1 :Package Shipping Calculator</title>
			<link rel="stylesheet" type="text/css" href="prac1.css">
	</head>
	<body>
		<div class="head">
			<h2>Cost of Package Delivery</h2> 
		</div>
		
		<div class="main">
			<?php
            define ("RateTrain", "0.01");
            define('RateTruck', '0.02');
            define('RateCar', '0.05');


            $Weight = isset($_POST['Weight']) ? $_POST['Weight'] : '';
            settype($Weight, "double");
            define ("WEIGHT", $Weight);

            $Train = isset($_POST['Train']) ? $_POST['Train'] : '';
            settype($Train, "double");

            $Truck =  isset($_POST['Truck']) ? $_POST['Truck'] : '';
            settype($Truck, "double");

            $Car = isset($_POST['Car']) ? $_POST['Car'] : '';
            settype($Car, "double");


        function RateShipping($Transport)
		  {
		  $Mili = $Transport * WEIGHT;
		  return (float)$Mili;
		  }


            $TrainRate = $Train * RateTrain;
            $TruckRate = $Truck * RateTruck;
            $CarRate = $Car * RateCar;
	

            $TrainTotalRate = RateShipping($TrainRate);
            $TruckTotalRate = RateShipping($TruckRate);
            $CarTotalRate = RateShipping($CarRate);
	

            $TrainInDolla = number_format($TrainTotalRate, 2, '.', '');
            $TruckInDolla = number_format($TruckTotalRate, 2, '.', '');
            $CarInDolla = number_format($CarTotalRate, 2, '.', '');		

            $total = number_format ($TrainTotalRate + $TruckTotalRate +$CarTotalRate, 2, '.','');


echo "For a $Weight pound package, it is estimated that: <br /><br />";
echo "$$TrainInDolla Train Freight cost <br />";
echo "$$TruckInDolla Truck Freight cost<br />";
echo "$$CarInDolla Car freight cost <br />";

?>
</div>
				<div class="calculation">
<?php

	echo "Total Shipping Charges: $$total";
	?>
</div>
		<br />
		<div class="outside">
			<?php
	date_default_timezone_set('America/New_York');
	echo "Last modified: " . date ("H:i F d, Y", getlastmod())," EDT";
	?> 
            <a href="index.php"> Return to the form page</a>
		</div>
	</body>
</html>
