<!DOCTYPE html PUBLIC "-//W3C//DTD XHML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Office Hours setup</title>
    <link href="labtwo.css" rel='stylesheet' />

</head>

<body>
    <div class="main">
        <div class='sidebar1'>
            <?php include ("menu.inc");?>
        </div>

        <div class='StdMain'>
            <p> Binaya Paudyal <br />
                <a href="mailto:bpaudyal@masonlive.gmu.edu"> bpaudyal@gmu.edu </a> <br />
                <?php 
                    date_default_timezone_set('America/New_York');
                echo '<strong>Last Modified : </strong>'
                    .date("H:i F d, Y", getlastmod()), "EDT";?>
        </div>
        <div class='ClsMain'>
            <p> <b> IT 207 - B02, Summer 2020 </b> <br />
                Daniel Garrison <br />
                George Mason University
            </p>
        </div>

        <div class= "emailtop">
            <h3> Office Hours Sign Up</h3>
        <form method = "POST" action = "email_it.php">
		
			Name: <input type="text" name="name"/>
			Email: <input type="text" name="email">
			<input type="submit" name="submit" value="Submit"/>
            <input type="reset" name="clear" value="Clear"/> </form>
        <br />
        <?php
		
		
		$email = $_POST['email'];
		$to = $email; 
		$subject = "Appointment";
		$message = "Appointments details are below.";
		$myemail = "from: bpaudyal@masonlive.gmu.edu"; 

		$result = mail($to,$subject,$message,$myemail);
		echo "Message sent successfully ", $myemail;	  
?>
 </div>
        
        <div class="calculation">
         	<?php include "calculation.php"; ?>
		
        </div>

        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>

</html>

