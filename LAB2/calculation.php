
         	<?php
			echo "";

			$monday = array();
			if(isset($_POST['Monday']) && !empty($_POST['Monday'])) {
			foreach ($_POST['Monday'] as $val) {
				$monday[] = $val;
				}
			}
			
			$tuesday = array();
			if(isset($_POST['Tuesday']) && !empty($_POST['Tuesday'])) {
			foreach ($_POST['Tuesday'] as $val) {
				$tuesday[] = $val;
				}
			}
			
			$wednesday = array();
			if(isset($_POST['Wednesday']) && !empty($_POST['Wednesday'])) {
			foreach ($_POST['Wednesday'] as $val) {
				$wednesday[] = $val;
				}
			}
			
			$thursday = array();
			if(isset($_POST['Thursday']) && !empty($_POST['Thursday'])) {
			foreach ($_POST['Thursday'] as $val) {
				$thursday[] = $val;
				}
			}
			
			$friday = array();
			if(isset($_POST['Friday']) && !empty($_POST['Friday'])){
			foreach ($_POST['Friday'] as $val) {
				$friday[] = $val;
				}
			}
		?>
		
		<?php
		
			echo "<div class=\"calender_title\">"; 
			echo date('F Y');
			echo "</div>";
			echo "<div class=\"calender_row\">";
				$Days = array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
				foreach ($Days as $day){
					echo "<div class=\"calender_column\">$day</div>";
				}
			echo"</div>";
			
			$month_days = date('t');
            
			
			for($x=0;$x<5;$x++){
				echo "<div class=\"calender_row\">";
					for($y=1;$y<8;$y++){
						$s = $x*7+$y;
						if ($s<=$month_days){
							echo "<div class=\"calender_column\">$s";
							if ($y==1 && !empty($monday)){
								foreach($monday as $val){
									echo "<br><input type=\"radio\" name=\"radio\" value=\"$val\">$val";
								}
							}
							
							elseif ($y==2 && !empty($tuesday)){
								foreach($tuesday as $val){
									echo "<br><input type=\"radio\" name=\"radio\" value=\"$val\">$val";
								}
							}
							
							elseif ($y==3 && !empty($wednesday)){
								foreach($wednesday as $val){
									echo "<br><input type=\"radio\" name=\"radio\" value=\"$val\">$val";
								}
							}
							
							elseif ($y==4 && !empty($thursday)){
								foreach($thursday as $val){
									echo "<br><input type=\"radio\" name=\"radio\" value=\"$val\">$val";
								}
							}
							
							elseif ($y==5 && !empty($friday)){
								foreach($friday as $val){
									echo "<br><input type=\"radio\" name=\"radio\" value=\"$val\">$val";
								}
							}
							echo "</div>";
						}
						else{
							echo "<div class=\"calender_column\">-</div>";
						}		
					}
				echo"</div>";
				
			}
		?>