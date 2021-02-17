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

					define ("busCapacity", 30);
					define ("carCapacity", 4);

					$passengerNum = isset($_POST['passengerNum']) ? $_POST['passengerNum'] : '';
					settype($passengerNum, "int");

					function bus_pass($pass){
						$bus = $pass/busCapacity;
						settype($bus, "int");
						return $bus;
					}

					function cars_pass($pass){
						$bus = ($pass%busCapacity)/carCapacity;
						settype($bus, "int");
						return $bus;
					}

					function leftover_pass($pass){
						$bus = ($pass%busCapacity)%carCapacity;
						settype($bus, "int");
						return $bus;
					}

					function circle($passvalue) {
						$result = "";
						for($x=0; $x < $passvalue; $x++)
						{
						$result .= "o ";
						}
						return $result;
					}

					$bus_pass = bus_pass($passengerNum);
					$cars_pass = cars_pass($passengerNum);
					$leftover_pass = leftover_pass($passengerNum);

					$busresult = circle($bus_pass); 
					$carresult = circle($cars_pass); 
					$leftoverresult = circle($leftover_pass); 

									
					echo "<b>$passengerNum </b> passengers need transportation:  <br /><br /> ";

					echo "<b>$bus_pass buses needed </b><br/>";
					echo "$busresult <br /> <hr />";
									
					echo "<b>$cars_pass cars needed</b><br/>";
					echo "$carresult <br /> <hr />";
									
					echo "<b>$leftover_pass Passengers left over</b><br/>";
					echo "$leftoverresult <br/> ";
							
			?>
</div>
				<div class="calculation">
<?php

	echo "<b>Legend: </b> Passengers per Bus = 30 | per car = 4";
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
