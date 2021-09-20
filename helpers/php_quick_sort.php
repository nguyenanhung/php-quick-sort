<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 5/20/18
 * Time: 16:54
 */
if (!function_exists('php_quick_sort')) {
    /**
     * Function PHP Quick Sort
     *
     * @param array $array
     *
     * @return array
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 35:45
     */
    function php_quick_sort($array = array())
    {
        // find array size
        $length = count($array);
        // base case test, if array of length 0 then just return array to caller
        if ($length <= 1) {
            return $array;
        }

        // select an item to act as our pivot point, since list is unsorted first position is easiest
        $pivot = $array[0];
        // declare our two arrays to act as partitions
        $left  = array();
        $right = array();
        // loop and compare each item in the array to the pivot value, place item in appropriate partition
        $countInput = count($array);
        for ($i = 1; $i < $countInput; $i++) {
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


