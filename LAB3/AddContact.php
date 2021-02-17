<!DOCTYPE html PUBLIC "-//W3C//DTD XHML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Lab Assignment 3</title>
    <link href="labthree.css" rel='stylesheet' />

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

        <div class= "contact_form">
				<h1> Binay's Contacts Directory </h1>
            <br />
			<br />

<?php
				
			$FirstName = ($_POST['FirstName']); //validating all inputs
			$LastName = ($_POST['LastName']);
			$email = ($_POST['email']);
			$phone = ($_POST['phone']);
			$address = ($_POST['address']);
			$city = ($_POST['city']);
			$state = ($_POST['state']);
			$zipcode = ($_POST['zipcode']);
			
			if (empty($FirstName) || empty($LastName) || empty($email) || empty($phone) ||
				empty($address) || empty($city) || empty($state) || empty($zipcode))
			{
				echo "<hr /><p>Error! Check if you have empty fields.</p><hr />";
			}
			else
			{
				$contact = $FirstName . ",";
				$contact .= $LastName . ",";
				$contact .= $email . ",";
				$contact .= $phone . ",";
				$contact .= $address . ",";
				$contact.= $city . ",";
				$contact.= $state . ",";
				$contact.= $zipcode. "\n";
			
						
			$contactadded = fopen("directory.txt", "a"); //opens directory file and appends new info to it ("a")
		if (flock($contactadded, LOCK_EX)) { 
			if (fwrite($contactadded, $contact) > 0) { //file write
			
			echo "<p>Congratulations! Your entry was successfully added to your directory.</p>";
			
?>
			 <a href= "index.php"> Return to Directory</a> <br /> <br/>
			 <a href = "AddContactForm.php">Add another contact</a>
			
<?php
			

			flock($contactadded, LOCK_UN); //flock is returned false
			fclose($contactadded);
			}
			else
			echo "<p>The given entry could not be saved, please try again!</p>";
		}
		else
		echo "<p>The given entry could not be saved, please try again!</p>";
			}
			
?>
        </div>   
                <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
            </div></div>

</body>

</html>