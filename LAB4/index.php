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
          
              <h3>Add Comments</h3>
               <hr/>
			   
                <form method="post" action="addnew.php">
                        <p><label>Name: </label><input type="text" name="name" /></p>
                        <p><label>E-mail address: </label><input type="email" name="email" /></p>
                        <p><label>Comments: </label><textarea name="comment" rows="4" cols="35"></textarea></p>
                        <input type="submit" name="submit" value="Sign"/>
                        <input type="reset" name="reset" value="Reset Form"/>
                </form>
				
                 <hr/>
            <br />
                 <div class="link">
                      <a href="view.php">View Posting Comments</a> 
				</div>
        </div>
        <div class="footer">
            <p> Disclaimer: This website is created for a school project. </p>
        </div>
    </div>

</body>

</html>
