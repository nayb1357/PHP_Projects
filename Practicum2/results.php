<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Online Quiz</title>
	<link rel="stylesheet" href="practicum2.css" type="text/css" />
</head>

<body>

<div class= "container">
<?php

function ViewQuestions($file) {
    $view_ques = array();
    if (file_exists($file)) {
        $ques = file($file);

        foreach ($ques as $k => $v) { //question: key choices:value
            $view_ques[] = explode(":",$v);
        }               
    }
    else { echo "Sorry! Unable to open the file."; }
    return $view_ques;
}

function view_mc($ques) {
    if (count($ques) > 0) {
        foreach ($ques as $k => $v) {
            echo "$v[0]</b><br/><br/>";
            $mc = explode(",",$v[1]); //explode to array

            foreach($mc as $v) {
                $choice = substr(trim($v),0,1);
                echo "<input type=\"radio\" name=\"$k\" value=\"$choice\">$v<br />";
            }            
            echo "<br />";
        }
    }
    else { echo "There are no questions to display."; }
}

function ReadAns($file) {
    $correct_ans = array(); 
    if (file_exists($file)) {
        $correct_ans = file($file);
    }
    return $correct_ans;
}

?>

<div class="top">
<h1>Online Quiz</h1>
<?php include "lastmod.php" ?>
    <hr /><br /> </div>

<form action="index.php" method="post">

<?php
    $allQues = ViewQuestions("questions.txt");
    view_mc($allQues);

?>

<input type="submit" name="submit" value="Retake Quiz"/>
<input type="reset" name="reset" value="Reset Quiz" />

<?php
if (isset($_POST['submit'])) {
    $correct_ans = ReadAns("answers.txt");
    $count = count($correct_ans);
    $correctCount = 0;

    foreach ($correct_ans as $k => $kanswer) {
        if (isset($_POST[$k])) {

            if (strtoupper(rtrim($kanswer)) == strtoupper($_POST[$k])) { //If correct_ans= submitted ans
                $correctCount++;
            }
        }
    }

    if ($count > 0) {
        $score = round((($correctCount / $count) * 100),2);
		
		function DisplayGrade($score) {
			switch (true) {
				case $score > 80:
					echo " <br /> <br /><center><green><b>You have scored ", $score, "% on the quiz. </green></center><br /><br />"; 
					break;
				case $score > 59 && $score < 80:
					echo "<br /> <center><yellow><b> You have scored ", $score, "% on the quiz.</yellow></center><br /><br />";
					break;
				case $score > 49 && $score < 60:
					echo "<br /> <br /><center> <red> <b> You have scored ", $score, "% on the quiz. </red></center><br /><br />";
					break;
				default:
					echo "<br /> <br /><center><black> <b> You got ", $score, "% on the quiz.</black></center><br /><br />";
			}
		} 
		DisplayGrade($score);
    }
    else {
        echo "<br /> <br /> <b> Your total score is 0%";
    }
}

?>

</form>

 </div>
</body>

</html>
