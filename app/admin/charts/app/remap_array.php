<?php
// Remap arrays with adding "г." or "гг." to years
if (preg_match('/.?-.?/', $first_region['years'])) {
    $first_region['years'] .= ' гг.';
} else {
    $first_region['years'] .= ' г.';
}

if (preg_match('/.?-.?/', $second_region['years'])) {
    $second_region['years'] .= ' гг.';
} else {
    $second_region['years'] .= ' г.';
}