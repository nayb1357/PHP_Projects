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
function View_questions($file) {
    $view_question = array();
    if (file_exists($file)) {
        $question = file($file);

        foreach ($question as $k => $v) { //question: key choices:value
            $view_question[] = explode(":",$v);
        }               
    }
    else { echo "Sorry! Unable to open the file."; }
    return $view_question;
}

function view_mc($question) {
    if (count($question) > 0) {
        foreach ($question as $k => $v) {
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
<div class="top">
<h1>Online Quiz</h1>
<?php include "lastmod.php" ?>
    <hr /><br /> </div>

<form action="results.php" method="post">

<?php
    $allQues = View_questions("questions.txt");
    view_mc($allQues);

?>

<input type="submit" name="submit" value="Submit Quiz"/>
<input type="reset" name="reset" value="Reset Quiz" />


</form>
<br /><br />
    <a href="extra.php">Extra Credit</a>

</div>
</body>

</html>
