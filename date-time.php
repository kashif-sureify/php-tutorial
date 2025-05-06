<?php

// D: Day
// d: date
// m: month number
// M: Month name
// y: year's last two digit
// Y: year in four digit

date_default_timezone_set("Asia/Kolkata");
echo "<br/>";

echo date("D, d / M / Y");
echo "<br/>";

// h: hour in 12 hr format
// H: hour in 24 hr format
// i: minute 
// s: second
// a: am/pm
// A: AM/PM


echo date("h:i:s A");
