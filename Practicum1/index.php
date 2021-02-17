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
			<form  action = "prac_result.php" method = "POST">
				<br />
					Weight: <input type="text" name="Weight"/> Pounds<br /> <br />
					By Train: <input type="text" name="Train"/> miles<br /> <br />
					By Truck: <input type="text" name="Truck"/> miles<br /> <br />
					By Car: <input type="text" name="Car"/> miles<br /> <br />
					<hr /> 
					<input type="submit"  value="Calculate"/> <br /><br />
			</form>
		</div>
		<br />
		<div class="outside">
			<h2>Proceed to 
                <a href="part2.php">Part 2</a> </h2>
		</div>
	</body>
</html>
