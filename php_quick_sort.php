<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 5/20/18
 * Time: 16:54
 */
/**
 * PHP Quick Sort
 * @param array $array
 * @return array
 */
function php_quick_sort($array = array())
{
    // find array size
    $length = count($array);
    // base case test, if array of length 0 then just return array to caller
    if ($length <= 1) {
        return $array;
    } else {
        // select an item to act as our pivot point, since list is unsorted first position is easiest
        $pivot = $array[0];
        // declare our two arrays to act as partitions
        $left  = array();
        $right = array();
        // loop and compare each item in the array to the pivot value, place item in appropriate partition
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }
        // use recursion to now sort the left and right lists
        return array_merge(php_quick_sort($left), array(
            $pivot
        ), php_quick_sort($right));
    }
}
$un_sorted = array(
    43,
    21,
    2,
    1,
    9,
    24,
    2,
    99,
    23,
    8,
    7,
    114,
    92,
    5
);
$sorted    = php_quick_sort($un_sorted);
print_r($sorted);
