
<?php
echo "<h1> Displaying Row Values From .CSV File </h1> ";
$row_num = 1; /*initializing line number */
if (($file = fopen("ex_9_values.csv", "r")) !== FALSE) { /* file is opened in read mode */
    while (($words = fgetcsv($file, 9000, ",")) !== FALSE) { /*reading fields in CSV format*/
        $num_of_data = count($words);
        
        echo "<br /> Row $row_num: <br /> \n";
        $row_num++; /*displaying each line*/
        for ($count=0; $count < $num_of_data; $count++) {
            echo $words[$count] . "\n";
        }
        echo "<br /> <hr />";
    }
    fclose($file);
}
?>