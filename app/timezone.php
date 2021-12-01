<?php

echo date_default_timezone_get(); //UTC

//How to Set Indian Time Zone
date_default_timezone_set("Asia/Kolkata");
echo '<br/>';
echo date_default_timezone_get();

echo '<br/>';
echo 'date :';
echo date('Y-m-d');

echo '<br/>';
echo date('H:i:s');//Hours :Interval in Minutes : Seconds 24 Format