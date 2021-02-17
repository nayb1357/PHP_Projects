<!DOCTYPE html PUBLIC "-//W3C//DTD XHML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Lab Assignment 1</title>
    <link href="labone.css" rel='stylesheet' />

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

        <div class="grade_display">
            
        <form action = "calculatedFgrade.php" method="post">
            <h3> Participation </h3>
            Earned: <input type="text" name="prcpnEarned" />
            Max: <input type="text" name="prcpnMax" />
            Weight (percentage) : <input type="text" name="prcpnweight" />
            
            <h3> Quizzes</h3>
            Earned: <input type="text" name="quizEarned" />
            Max: <input type="text" name="quizMax" />
            Weight (percentage) : <input type="text" name="quizWeight" />
            
            <h3> Lab Assignments </h3>
            Earned: <input type="text" name="labEarned" />
            Max: <input type="text" name="labMax" />
            Weight (percentage) : <input type="text" name="labWeight" />
            
            <h3> Practica</h3>
            Earned: <input type="text" name="practicumEarned" />
            Max: <input type="text" name="practicumMax" />
            Weight (percentage): <input type="text" name="practicumWeight" />
            <br /> <br />
            <input type="Submit" />
        </form>    
        </div>

        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>

</html>
