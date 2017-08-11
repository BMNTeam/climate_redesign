<?php
/**
 * Create Special Column Chart diagram
 * @param $first_region array
 * @param $second_region array
 * @param $arr1 array first years values
 * @param $arr2 array second years values
 * @return void
 *
 */
function createSpecialColumnChart ( $first_region, $arr1, $temperature_sum)
{
    global $additional_months_array;


    // Annotations work only on previous version of Google Charts !!!
    $first_region = $first_region;

    $number_of_months = count($additional_months_array);

    ?>


    <?php require_once(__DIR__ .'/../remap_array.php'); ?>
    <?php require_once('chart_3_html.php'); ?>
    <?php require_once('chart_3_js.php'); ?>

    <?php
}
