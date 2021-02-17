<!DOCTYPE html PUBLIC "-//W3C//DTD XHML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Lab Practice</title>
    <link href="labPractice.css" rel='stylesheet' />

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

        <div class="cen_left">
            <div class='Pic'>
                <img src="naybpic.jpg" alt="Image of Binay" />
                <p>
                    <center>
                        <?php
echo "This is me!";
?>
                    </center>
                </p>
            </div>

            <div class='SumPart'>
                <h2> Summary </h2>
                <ul>
                    <li>
                        <?php
echo "Personal";
?>
                    </li>
                    <ul>
                        <li> <b> Name: </b> Binaya Paudyal </li>
                        <li> <b> Preferred:</b> Bnay </li>
                        <li> <b> Age: </b> 23 </li>
                        <li> <b> Passion: </b> Music, Producing beats, and Coding </li>
                        <li> <b> Born and raised: </b> Jhapa, Nepal</li>
                    </ul>
                    <li>
                        <?php
echo "Acedemic";
?>
                    </li>
                    <ul>
                        <li> <b> University: </b> George Mason University</li>
                        <li> <b> Major: </b> Information Technology</li>
                        <li> <b> Concentration: </b> Database Technology and Programming</li>
                        <li> <b> Skills: </b> MS Office, Python, Adobe Photoshop, Adobe Animate, and Dreamweaver</li>
                    </ul>
                </ul>

            </div>
        </div>
        <div class='Pdetail'>
            <h2> Professional and Personal Details </h2>
            <p> My name is Binaya Paudyal. I am 23 years old. I was born in Jhapa, Nepal and it is my fifth year in the United States. I’m currently persuing bachelor’s in Information Technology major. I’m a junior, planning on taking Database Technology and programming concentration. I work in the Hospitality field as a sales representative, and assisting guests. I’m passionate in music and I love singing and producing beats in my free time. I have skills in MS Office, Python, Adobe Photoshop, Adobe Animate, Dreamweaver. Also having passion for music, I do have basic skills in music software’s such as Audacity, Reaper, Garage band, FL studio, and Adobe Audition. </p>
            <p>
                <center>
                    <?php
echo "Thank you!";
?>
                </center>
            </p>
        </div>

        <div class="footer">
            <p>
                <?php include 'labPrac.php';?> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>

</html>
