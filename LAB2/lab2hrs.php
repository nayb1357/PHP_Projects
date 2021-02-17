<?php
$Hours =['7:00am','7:30am','8:00am','8:30am','9:00am','9:30am','10:00am','10:30am','11:00am','11:30am','12:00pm','12:30pm','1:00pm','1:30pm','2:00pm','2:30pm','3:00pm','3:30pm','4:00pm','4:30pm','5:00pm','5:30pm','6:00pm','6:30pm','7:00pm','7:30pm','8:00pm','8:30pm','9:00pm','9:30pm'];
/*assigning the available times in an array */
?>

<form method="post" action="results.php"> 
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
