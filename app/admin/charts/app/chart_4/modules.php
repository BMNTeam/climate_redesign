<?php
/**
 * Create Column Chart diagram
 * @param $first_region array
 * @param $second_region array
 * @param $arr1 array first years values
 * @param $arr2 array second years values
 * @return void
 *
 */
function createLineChartForTemperature ( $first_region, $second_region, $arr1, $arr2)
{
    global $months;

    // Annotations work only on previous version of Google Charts !!!

    $first_region = $first_region;

    $number_of_months = 0;

    //Find the longer one (hardcoded for now needs revision)
    if (count($arr1) == count($arr2)) {
        $number_of_months = 12;
    } elseif (count($arr1) > count($arr2)) {
        $number_of_months = count($arr1);
    } else {
        $number_of_months = count($arr2);
    }
    ?>

    <?php require_once(__DIR__ .'/../remap_array.php'); ?>
    <?php require_once('chart_4_html.php'); ?>
    <?php require_once('chart_4_js.php'); ?>

    <?php
}
