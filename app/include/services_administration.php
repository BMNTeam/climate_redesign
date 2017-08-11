<?php
//Initiate database


require_once('DB_itit.php');

// Get all services
$selectServices = $db->query("SELECT * FROM ClimateData_administration");
$servicesVisibility = ($selectServices->fetchAll(PDO::FETCH_ASSOC));
$number_of_elements = count($servicesVisibility);
print_r($_POST);
// Set new visible variables
// First loop through all rows in database
for( $i = 0; $i < $number_of_elements; $i++) {

	// Then go through loop and check if values then came
	// with POST request the same with values in database
	// then set their VISIBLE attribute to TRUE (1)
	foreach ($_POST as $key => $value) {
		if($key == $servicesVisibility[$i]['service_id']){
			$servicesVisibility[$i]['visible'] = 1;
			break;
		} else {
			$servicesVisibility[$i]['visible'] = 0;
		}
	}
}
// Index variable needs to decide with line separator to use
$index = 0;

// Variables for MySQL query
$sql_query = 'INSERT INTO ClimateData_administration (service_id, visible) VALUES ';
$insert_query = "";
$on_duplicate_text = "ON DUPLICATE KEY UPDATE visible=VALUES(visible)";

// Loop through new visible services array and create MySQL query here
foreach ( $servicesVisibility as $service) {

	// If last element in array then change line separator to nothing ''
	$line_separator = ',';
	($index == $number_of_elements-1) ? $line_separator = '' : $line_separator = ',';

	// Create values to insert
	$insert_query .= "($service[service_id], $service[visible])".$line_separator;

	$index++;
}


$sql = $sql_query . $insert_query . $on_duplicate_text;
$updateValues = $db->prepare($sql);
$updateValues->execute();

return "Done";