<?php

require_once('includes/DB_itit.php');

/** Variables */
$insert_values = '';
$year = 2000;



/** Get last Year
 * @param $db PDO Connection
 * @return  string $last_year
 */
function get_last_year ($db) {
    $last_year_query_string = 'SELECT MAX(Year) as MaxYear FROM ClimateData_TP';
    $last_year = $db->prepare($last_year_query_string);
    $last_year->execute();
    $last_year = $last_year->fetchAll( PDO::FETCH_ASSOC );

    return $last_year = $last_year[0]['MaxYear'] ;
}


//Get last year and increase it by 1
$last_year = get_last_year($db);
$year = $last_year + 1;


/** Create Insert Query */
for( $i=1; $i <= 16; $i++)
{
    //If is last string don't add comma at the end of the query
    if( $i == 16)
    {
        $insert_values.= "($i, $year, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
    }
    else
    {
        $insert_values.= "($i, $year, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),";
    }
}




$insert_query_string = 'INSERT INTO ClimateData_TP(MeteostationID, Year, T1,  T2, T3, T4, T5, T6, T7, T8, T9, T10, T11, T12, P1, P2, P3, P4, P5, P6, P7, P8, P9, P10, P11, P12)
                         VALUES
                        ' .
                            $insert_values. ' ';


$add_year = $db->prepare($insert_query_string);
$add_year->execute();

echo "<h1> Year $year was successfully added</h1>";
