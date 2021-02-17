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
				<h3> Social Networking 101 </h3>
            <?php

            if(!empty($_POST['index']))
            {
                if(file_exists ("cmmnt.txt"))
                {
                    $part= file("cmmnt.txt");
                    $num= count($part);
                    $part_delete= $_POST['index']-1;
                    unset($part[$part_delete]);
                    array_values($part);
                    $newfile = fopen ("cmmnt.txt","w");
                    fwrite($newfile, implode($part));
                    echo "You have successfully deleted the comment.";
                } }
            else
            {
                echo "<p>Error! Comment could not be deleted. Please enter a valid row number. </p>";
            }
            ?>
            <br />
            <hr />
        <div class="link">
            <a href="index.php"> Go back to add more comments </a> <br />
            <a href="view.php"> View Posted Comments </a> <br />
             </div></div>
        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
        </div>

</body>

</html>
