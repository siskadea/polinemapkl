<?php

$startDate = time();
// $date('Y-m-d H:i:s', strtotime('+1 day', $startDate));

// $date = "2020-01-22";
// $date1 = str_replace('-', '/', $date);
// $tomorrow = date('Y-m-d',strtotime($date1 . "+1 days"));

// echo $tomorrow;

// echo strtotime("now");
// echo strtotime("+1 month");
$date = date('Y-m-1',  strtotime("+1 month"));
echo $date;
// $months = n;  //Here n = …..-2,-1,0,1,2, …..(months to add or subtract)
// $years = n;   //Here n = …..-2,-1,0,1,2, …..(years to add or subtract)
// echo date('Y-m-28', mktime(0, 0, 0, date('m')+$months, 1, date('Y') + $years));
?>