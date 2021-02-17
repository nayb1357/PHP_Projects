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
$FirstName = addslashes($_POST["FirstName"]); 
$LastName = addslashes($_POST["LastName"]);

	if (file_exists("directory.txt")) { //Checking if a file exists 
		
		$file = file_get_contents("directory.txt"); 
		$file = stripslashes($file); 
		$array_file = explode("\n", $file);
		$num = count($array_file);
		$record_check = FALSE;
		for ($x=0;$x<$num;++$x) {
		$entry_data = explode(",", $array_file[$x]);
		if ($entry_data[0] == $_POST['FirstName'] && $entry_data[1] == $_POST['LastName']) { //displaying the collected data in a form format.
			echo " 
			<form method='post' action='updatecontact.php'>
			<fieldset>
			<p>First Name <input type='text' name='FirstName' value='{$entry_data[0]}' /> Last Name <input type='text' name='LastName' value='{$entry_data[1]}' /></p>
			<p>Email Address <input type='text' name='email' value='{$entry_data[2]}' /></p>
			<p>Phone Number <input type='text' name='phone' value='{$entry_data[3]}' /></p>
			<p>Address <input type='text' name='address' value='{$entry_data[4]}' /></p>
			<p>City <input type='text' name='city' value='{$entry_data[5]}' /></p>
			<p>State <select name='state'>";
			
			($entry_data[6] == "AL") ? print '<option value="AL" selected>Alabama</option>': print '<option value="AL">Alabama</option>';
			($entry_data[6] == "AK") ? print '<option value="AK" selected>Alaska</option>' : print '<option value="AK">Alaska</option>';
			($entry_data[6] == "AZ") ? print '<option value="AZ" selected>Arizona</option>' : print '<option value="AZ">Arizona</option>';
			($entry_data[6] == "AR") ? print '<option value="AR" selected>Arkansas</option>' : print '<option value="AR">Arkansas</option>';
			($entry_data[6] == "CA") ? print '<option value="CA" selected>California</option>' : print '<option value="CA">California</option>';
			($entry_data[6] == "CO") ? print '<option value="CO" selected>Colorado</option>' : print '<option value="CO">Colorado</option>';
			($entry_data[6] == "CT") ? print '<option value="CT" selected>Connecticut</option>' : print '<option value="CT">Connecticut</option>';
			($entry_data[6] == "DE") ? print '<option value="DE" selected>Delaware</option>' : print '<option value="DE">Delaware</option>';
			($entry_data[6] == "DC") ? print '<option value="DC" selected>District Of Columbia</option>' : print '<option value="DC">District Of Columbia</option>';
			($entry_data[6] == "FL") ? print '<option value="FL" selected>Florida</option>' : print '<option value="FL">Florida</option>';
			($entry_data[6] == "GA") ? print '<option value="GA" selected>Georgia</option>' : print '<option value="GA">Georgia</option>';
			($entry_data[6] == "HI") ? print '<option value="HI" selected>Hawaii</option>' : print '<option value="HI">Hawaii</option>';
			($entry_data[6] == "ID") ? print '<option value="ID" selected>Idaho</option>' : print '<option value="ID">Idaho</option>';
			($entry_data[6] == "IL") ? print '<option value="IL" selected>Illinois</option>' : print '<option value="IL">Illinois</option>';
			($entry_data[6] == "IN") ? print '<option value="IN" selected>Indiana</option>' : print '<option value="IN">Indiana</option>';
			($entry_data[6] == "IA") ? print '<option value="IA" selected>Iowa</option>' : print '<option value="IA">Iowa</option>';
			($entry_data[6] == "KS") ? print '<option value="KS" selected>Kansas</option>' : print '<option value="KS">Kansas</option>';
			($entry_data[6] == "KY") ? print '<option value="KY" selected>Kentucky</option>' : print '<option value="KY">Kentucky</option>';
			($entry_data[6] == "LA") ? print '<option value="LA" selected>Louisiana</option>' : print '<option value="LA">Louisiana</option>';
			($entry_data[6] == "ME") ? print '<option value="ME" selected>Maine</option>' : print '<option value="ME">Maine</option>';
			($entry_data[6] == "MD") ? print '<option value="MD" selected>Maryland</option>' : print '<option value="MD">Maryland</option>';
			($entry_data[6] == "MA") ? print '<option value="MA" selected>Massachusetts</option>' : print '<option value="MA">Massachusetts</option>';
			($entry_data[6] == "MI") ? print '<option value="MI" selected>Michigan</option>' : print '<option value="MI">Michigan</option>';
			($entry_data[6] == "MN") ? print '<option value="MN" selected>Minnesota</option>' : print '<option value="MN">Minnesota</option>';
			($entry_data[6] == "MS") ? print '<option value="MS" selected>Mississippi</option>' : print '<option value="MS">Mississippi</option>';
			($entry_data[6] == "MO") ? print '<option value="MO" selected>Missouri</option>' : print '<option value="MO">Missouri</option>';
			($entry_data[6] == "MT") ? print '<option value="MT" selected>Montana</option>' : print '<option value="MT">Montana</option>';
			($entry_data[6] == "NE") ? print '<option value="NE" selected>Nebraska</option>' : print '<option value="NE">Nebraska</option>';
			($entry_data[6] == "NV") ? print '<option value="NV" selected>Nevada</option>' : print '<option value="NV">Nevada</option>';
			($entry_data[6] == "NH") ? print '<option value="NH" selected>New Hampshire</option>' : print '<option value="NH">New Hampshire</option>';
			($entry_data[6] == "NJ") ? print '<option value="NJ" selected>New Jersey</option>' : print '<option value="NJ">New Jersey</option>';
			($entry_data[6] == "NM") ? print '<option value="NM" selected>New Mexico</option>' : print '<option value="NM">New Mexico</option>';
			($entry_data[6] == "NY") ? print '<option value="NY" selected>New York</option>' : print '<option value="NY">New York</option>';
			($entry_data[6] == "NC") ? print '<option value="NC" selected>North Carolina</option>' : print '<option value="NC">North Carolina</option>';
			($entry_data[6] == "ND") ? print '<option value="ND" selected>North Dakota</option>' : print '<option value="ND">North Dakota</option>';
			($entry_data[6] == "OH") ? print '<option value="OH" selected>Ohio</option>' : print '<option value="OH">Ohio</option>';
			($entry_data[6] == "OK") ? print '<option value="OK" selected>Oklahoma</option>' : print '<option value="OK">Oklahoma</option>';
			($entry_data[6] == "OR") ? print '<option value="OR" selected>Oregon</option>' : print '<option value="OR">Oregon</option>';
			($entry_data[6] == "PA") ? print '<option value="PA" selected>Pennsylvania</option>' : print '<option value="PA">Pennsylvania</option>';
			($entry_data[6] == "RI") ? print '<option value="RI" selected>Rhode Island</option>' : print '<option value="RI">Rhode Island</option>';
			($entry_data[6] == "SC") ? print '<option value="SC" selected>South Carolina</option>' : print '<option value="SC">South Carolina</option>';
			($entry_data[6] == "SD") ? print '<option value="SD" selected>South Dakota</option>' : print '<option value="SD">South Dakota</option>';
			($entry_data[6] == "TN") ? print '<option value="TN" selected>Tennessee</option>' : print '<option value="TN">Tennessee</option>';
			($entry_data[6] == "TX") ? print '<option value="TX" selected>Texas</option>' : print '<option value="TX">Texas</option>';
			($entry_data[6] == "UT") ? print '<option value="UT" selected>Utah</option>' : print '<option value="UT">Utah</option>';
			($entry_data[6] == "VT") ? print '<option value="VT" selected>Vermont</option>' : print '<option value="VT">Vermont</option>';
			($entry_data[6] == "VA") ? print '<option value="VA" selected>Virginia</option>' : print '<option value="VA">Virginia</option>';
			($entry_data[6] == "WA") ? print '<option value="WA" selected>Washington</option>' : print '<option value="WA">Washington</option>';
			($entry_data[6] == "WV") ? print '<option value="WV" selected>West Virginia</option>' : print '<option value="WV">West Virginia</option>';
			($entry_data[6] == "WI") ? print '<option value="WI" selected>Wisconsin</option>' : print '<option value="WI">Wisconsin</option>';
			($entry_data[6] == "WY") ? print '<option value="WY" selected>Wyoming</option>' : print '<option value="WY">Wyoming</option>';

echo "</select>
				<p>Zip <input type='text' name='zipcode' value='{$entry_data[7]}' /></p>
				<p><input type='submit' value=' Update Contact' />
				</fieldset>
				<input type='hidden' name='previousdata' value='$array_file[$x]' /></p></form>";
?>
					

<?php
			$record_check = TRUE;
			break;
		}
		}
		if ($record_check == FALSE) //checking to see if record exists
		echo "<p>Sorry, the entry record does not exist!</p> ";

	}
	else {
		echo "<p>You must enter a value in each field. Click your browser's Back button to return to the form."; }
?>
        </div>
<a href="index.php"> Return to Directory</a>
        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
        </div>

</body>

</html>
