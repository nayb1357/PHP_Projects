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
				
			<form action="find_contact.php" method="post">
			<fieldset>
                <h2>Search for a Contact</h2>
			
                First Name: <input type="text" name="FirstName" required />
                Last Name: <input type="text" name="LastName" required />
			</fieldset>
			<br />
                <input type="submit" name="submit" value="Search Name" />
			</form>
			<br/>
			
			<a href="AddContactForm.php">Add New Contact Entry</a>
			</div>

        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>

</html>
