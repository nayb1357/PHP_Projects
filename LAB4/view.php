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
            <h3>Huh?</h3>
         <p>Kirschner and Karpinski report that:<br />
             Students who used social networking sites while studying scored 20% lower on tests and students who used social media had an average GPA of 3.06 versus non-users who had an average GPA of 3.82</p>
             <p>Source: Paul A. Kirschner and Aryn C. Karpinski, "Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010</p>
          
              <h3>Comments</h3>
               <hr/>
			<?php

$viewfile= file("cmmnt.txt");
$num = count($viewfile);
$count=1;
for ($x = 0; $x<$num; $x++)
{
$part =  explode(",",$viewfile[$x]);
echo "<p> $count. Name: <a href = 'mailito: $part[1]'> $part[0] </a> </br> Comment: $part[2] </p>";
$count++;
}
?>
            <hr />
<div class="link">
<a href="index.php">Go back to add Comments</a>	<br />
<a href="ascending.php"> Sort comments A to Z </a> <br />
<a href="descending.php"> Sort comments Z to A </a> <br />
    </div>


<form action="del.php" method="post" class="del">

<p> Delete comment number: 
<input type="text" name="index">
<input type="submit" value="Delete"> </p>

</form> </div>
        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
        </div>

</body>

</html>
