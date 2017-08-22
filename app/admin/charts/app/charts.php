<?php

require_once( 'development_variables.php' );
require_once('chart_1/modules.php');
require_once('chart_2/modules.php');
require_once('chart_3/modules.php');
require_once('chart_4/modules.php');

$get_request = $_GET['chart'];

if ( $get_request == 1) {
    createColumnChart($first_region, $second_region, $arr1, $arr2);
} elseif ( $get_request == 2) {
    createLineChart($first_region, $second_region, $arr1, $arr2);
}
elseif ($get_request == 3) {
    createSpecialColumnChart($first_region,$special_array_for_third_chart, $temperature_sum);
} elseif ($get_request == 4) {
	createLineChartForTemperature($first_region, $second_region, $arr1, $arr2);
}







