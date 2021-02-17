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

        <div class='heading'>
        <h1> Office Hour Setup Form</h1>
        </div>
        
        <div class="setup">
         <?php
$Hours =['7:00am','7:30am','8:00am','8:30am','9:00am','9:30am','10:00am','10:30am','11:00am','11:30am','12:00pm','12:30pm','1:00pm','1:30pm','2:00pm','2:30pm','3:00pm','3:30pm','4:00pm','4:30pm','5:00pm','5:30pm','6:00pm','6:30pm','7:00pm','7:30pm','8:00pm','8:30pm','9:00pm','9:30pm'];
/*assigning the available times in an array */
?>

<form method="post" action="calender.php"> 
<div class="HourTable">
<div class="full">
<div class="top">


<div class="rowcell">&nbsp;Monday</div> 
<div class="rowcell">&nbsp;Tuesday</div>
<div class="rowcell">&nbsp;Wednesday</div>
<div class="rowcell">&nbsp;Thursday</div>
<div class="rowcell">&nbsp;Friday</div>

</div>
<div class="bottom">

<div class="rowcell">&nbsp;
    
    

<select name="Monday[]" size ="15" multiple>

                            <?php

                            foreach($Hours as $UserTime):
                                echo '<option value=' . $UserTime . '>' . $UserTime . '</option>';
                            endforeach;

                            ?>

                        </select>

</div>
<div class="rowcell">&nbsp;
<select name="Tuesday[]" size ="15" multiple>

                            <?php

                            foreach($Hours as $UserTime):

                                echo '<option value=' . $UserTime . '>' . $UserTime . '</option>';

                            endforeach;

                            ?>						

                        </select>

</div>

<div class="rowcell">&nbsp;

<select name="Wednesday[]" size ="15" multiple>

                            <?php

                            foreach($Hours as $UserTime):

                                echo '<option value=' . $UserTime . '>' . $UserTime . '</option>';

                            endforeach;

        ?>				

                        </select>
</div>


<div class="rowcell">&nbsp;

<select name="Thursday[]" size ="15" multiple>

                            <?php

                            foreach($Hours as $UserTime):

                                echo '<option value=' . $UserTime . '>' . $UserTime . '</option>';

                            endforeach;

                            ?>
                        </select>
</div>


<div class="rowcell">&nbsp;

<select name="Friday[]" size ="15" multiple>

                            <?php

                            foreach($Hours as $UserTime):

                                echo '<option value=' . $UserTime . '>' . $UserTime . '</option>';

                            endforeach;

                            ?>				

                        </select>

</div>
</div>
</div>
</div>

 <input type="reset" value="Clear" />

                        <input type="submit" value="Submit" />

  </form>
   
        </div>

        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>

</html>
