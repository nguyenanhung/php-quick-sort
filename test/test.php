<?php
/**
 * Project php-quick-sort
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/20/2021
 * Time: 11:33
 */
require_once __DIR__ . '/../vendor/autoload.php';


$un_sorted = [43, 21, 2, 1, 9, 24, 2, 99, 199, 3000, 2021, 23, 8, 7, 114, 92, 5];
$sorted    = php_quick_sort($un_sorted);
print_r($sorted);