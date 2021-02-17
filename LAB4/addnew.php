<!DOCTYPE html PUBLIC "-//W3C//DTD XHML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Lab Assignment 4</title>
    <link href="labfour.css" rel='stylesheet' />

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

        <div class="social">
				<h1> Social Networking 101</h1>
			<?php
				
			$name = ($_POST['name']); 			
			$email= ($_POST['email']);
			$comment = ($_POST['comment']);
			$duplicate = true;
			
			
			if (empty($name) || empty($email) || empty($comment))   
			{
				echo "<hr /><p>Your fields cannot be empty, please fill them out!.</p><hr />";
			}
			else 
			{
				$each_contact = $name . ",";  
				$each_contact .= $email . ",";
				$each_contact .= $comment . "\n"; 
			
						
			$each_contactadded = fopen("cmmnt.txt", "a"); 
		if (flock($each_contactadded, LOCK_EX)) {  
			if (fwrite($each_contactadded, $each_contact) > 0) { 
			
			echo "<h2> Comment Added: </h2><hr />"; 
            echo "Name: ",$name,"<br />" ;
            echo "Comment: ",$comment;
			
?>
<?php
			

			flock($each_contactadded, LOCK_UN); 
			fclose($each_contactadded); 
			}
			else
			echo "<p>Your comment could not be saved, please try again!</p>"; 
		}
		else
		echo "<p>The given entry could not be saved, please try again!</p>";
			}
			
?>
            <br />
            <hr />
            <div class="link">
            <a href="index.php"> Someone else wants to comment? </a> <br />
            <a href="view.php"> View Posting Comments </a>
			
            </div> </div> 

        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>

</html>
