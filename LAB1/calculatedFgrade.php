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

        <div class="grade_cal">
        
       	<?php
		    if (isset($_POST['prcpnEarned']))
		      {if ( !empty($_POST['prcpnEarned']))
			     {if ( !empty($_POST['prcpnMax']))
				    {if ( !empty($_POST['prcpnweight']))
					   {if ( !empty($_POST['quizEarned']))
						  {if ( !empty($_POST['quizMax']))
							  {if ( !empty($_POST['quizWeight']))
							   	  {if ( !empty($_POST['practicumEarned']))
									 {if ( !empty($_POST['practicumMax']))
										{if ( !empty($_POST['practicumWeight']))
											{	
												$earned[] = $_POST['prcpnEarned'];
												$max[] = $_POST['prcpnMax'];
												$weight[] = $_POST['prcpnweight'];
												$earned[] = $_POST['quizEarned'];
												$max[] = $_POST['quizMax'];
												$weight[] = $_POST['quizWeight'];
												$earned[] = $_POST['labEarned'];
												$max[] = $_POST['labMax'];
												$weight[] = $_POST['labWeight'];
												$earned[] = $_POST['practicumEarned'];
												$max[] = $_POST['practicumMax'];
												$weight[] = $_POST['practicumWeight'];
												function gradeEarnedCalc($earned, $gradeMax)
												{
													$result = $earned / $gradeMax;
													$gradeEarned = $result * 100;
													return $gradeEarned;
												}
												function weightCalc($grade, $gradeWeight)
												{
													$resultOfWeight = (($grade*$gradeWeight)/100);
													return $resultOfWeight;
												}
												for($x = 0; $x < 4; $x++)
												{
													$gradeCalc[$x] = gradeEarnedCalc($earned[$x], $max[$x]);
												}

												for($x = 0; $x < 4; $x++)
												{
													$weightedNum[] = weightCalc($gradeCalc[$x], $weight[$x]);
												}

												$titleNames = array("Participation", "Quizzes", "Lab Assignments", "Practica");
												if ($max[0] == 0 && $max[1] == 0 && $max[2] == 0 && $max[3] == 0)
												{
													echo "<p>Error! Maximum of grade is missing.<p>";
												}
												else
												{
													for($x = 0; $x < 4; $x++)
													{
														echo "<p>You Earned a ", round($gradeCalc[$x], 2),"%", " for the ", $titleNames[$x], ", with a weighted value of ", $weightedNum[$x],"%.<p>" ;
													}
													$finalGrade = 0;
													for($x = 0; $x < 4; $x++)
													{
														$finalGrade += $weightedNum[$x];
													}
													echo "<br><strong>Final Grade is :", round($finalGrade,2), "%, <br /> Grade letter is :</strong>";												
													echo $Fgrade = ((
													  ($finalGrade >= 97)? 'n A+.':
													  (($finalGrade >=93 and $finalGrade < 97)? ' A.':
													  (($finalGrade >=90 and $finalGrade < 93)? ' A-.':
													  (($finalGrade >=87 and $finalGrade < 90)? ' B+.':
													  (($finalGrade >=83 and $finalGrade < 87)? ' B.':
													  (($finalGrade >=80 and $finalGrade < 83)? ' B-.':
													  (($finalGrade >=77 and $finalGrade < 80)? ' C+.':
													  (($finalGrade >=73 and $finalGrade < 77)? ' C.':
													  (($finalGrade >=70 and $finalGrade < 73)? ' C-.':
													  (($finalGrade >=60 and $finalGrade < 70)? ' D.':
													  (($finalGrade >=0 and $finalGrade < 60)? ' F.':
													  'Not available' ))))))))))));
												   }
											       }else echo "<p>Error! Re-enter the weighted practica.</p>";
										           }else echo "<p>Error! Re-enter the maximum grade practica.</p>";
									               }else echo "<p>Error! Re-enter the earned practica grade.</p>";
								                   }else echo "<p>Error! Re-enter the weighted the quizes.</p>";
							                       }else echo "<p>Error! Re-enter the maximum quiz grade.</p>";
					                               }else echo "<p>Error! Re-enter the earned quiz grade.</p>";
				         	                       }else echo "<p>Error! Re-enter the weightd participation.</p>";
				                                   }else echo "<p>Error! Re-enter the maximum participation grade.</p>";
			                                       }else echo "<p>Error! Re-enter the earned participation grade.</p>";
	                                               }
		?>
        </div>
        

        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>
</html>