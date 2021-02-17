<?php
  
    if (get_magic_quotes_gpc()) { 
        echo "GPC Magic Quotes ------ On";
    }
    else {
        echo "GPC Magic Quotes ------ Off";
    }

?>
<br />
<br />
<?php
  
    if (get_magic_quotes_runtime()) { 
            echo "Runtime Magic Quotes --------- On";
    }
    else {
        echo "Runtime Magic Quotes --------- Off";
    }

?>
