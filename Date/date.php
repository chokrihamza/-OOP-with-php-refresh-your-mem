<?php

print_r(checkdate(15, 20, 2003) ? 'yess' : 'nooo');
var_dump(checkdate(2, 29, 2003) ? 'yess' : 'nooo');
//
$date = date_create("15-03-2020");
date_add($date, date_interval_create_from_date_string("50 days"));

echo date_format($date, 'Y-m-d');
$date = date_create_from_format("j-M-Y", "15-Mar-2013");
print_r($date);
$date = date_create();
echo date_format($date, 'Y-m-d');
echo date_default_timezone_get();
$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");
print_r($diff = date_diff($date1, $date));

print_r(getdate());
print_r(gettimeofday());
echo gmdate("1");
print_r(localtime());
$t = time();
echo ($t . "<br>");
echo (date("Y-m-d", $t));