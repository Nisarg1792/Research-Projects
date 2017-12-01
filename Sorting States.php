/*** sorting state, City goes under the states ***/

//getting the data from database 
$rows = mysql_fetch_assoc($result);

// set a starting value as null 
$last_country =''; 

foreach( $rows as $row) {
    if($row['Country'] !== $last_country) {
        echo '<b>'. $row['Country'] .'</b><br />'. PHP_EOL ;
            $last_country = $row['Country'];  // if it is a new one, overwrite the value
      }
        echo '-' . $row['State'] . ' - ' . $row['City'] .' <br />'. PHP_EOL ; // do this anyway
}

