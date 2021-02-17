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

        <div class= "directory">
				<h1> Binay's Contacts Directory </h1>
            <br />
						
						<?php
		$Udata = $_POST['FirstName'] . "," . $_POST['LastName'] . "," . $_POST['email'] . "," . $_POST['phone'] . "," . $_POST['address'] . "," . $_POST['city'] . "," . $_POST['state'] . "," . $_POST['zipcode']; 
		$Pdata = $_POST['previousdata']; 
		if (file_exists("directory.txt")) {
			$Pfile = file_get_contents("directory.txt");
			$line = explode("\n", $Pfile); 
			$num = count($line);
			for ($x=0;$x<$num;++$x) {  
				if ($line[$x] == $Pdata) {
					$line[$x] = $Udata;
					$newrecord = implode("\n", $line); 
					$updaterecord = fopen("directory.txt", "w"); 
					if (flock($updaterecord, LOCK_EX)) { 
						if (fwrite($updaterecord, $newrecord) > 0) {
							echo "<p>Your entry is now sucessfully updated!</p>";

							flock($updaterecord, LOCK_UN); 
							fclose($updaterecord);
						}
						else
							echo "<p> Error ! Sorry, your entry could not be updated!</p>"; 
						
					}
					else
						echo "<p> Error ! Sorry, your entry could not be updated!</p>"; 
						?>
					

			 <a href="index.php">Return to Directory</a>
<?php
					break;
				}
			}
		}
		else
			echo "<p>The file does not exist!";
		?>
						
			</div>
<a href="index.php"> Return to Directory</a>
        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
        </div>

</body>

</html>
