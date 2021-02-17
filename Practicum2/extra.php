<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Online Quiz - Practicum 2</title>
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
    else { echo "Sorry, unable to open the file."; }
    return $view_ques;
}

function view_mc($ques) {
    if (count($ques) > 0) {
        foreach ($ques as $k => $v) {
            echo "$v[0]</b><br/><br/>";
            $mc = explode(",",$v[1]); //explode to array

            foreach($mc as $v) {
                $choice = substr(trim($v),0,1);
                echo "<input type=\"radio\" name=\"$k\" value=\"$choice\">$v<br/>";
            }            
            echo "<br/>";
        }
    }
    else { echo "There are no questions to display."; }
}
?>
<div class="extra">
<h1>Online Extra Quiz</h1>
<?php include "lastmod.php" ?>
    <hr /><br /> </div>


<form action="ex_results.php" method="post">

<?php
    $allQues = ViewQuestions("ex_questions.txt");
    view_mc($allQues);

?>

<input type="submit" name="submit" value="Submit Quiz"/>
<input type="reset" name="reset" value="Reset Quiz" />


</form>
<br /> <br />
    <a href="index.php">Main Quiz</a>

</div>
</body>

</html>
