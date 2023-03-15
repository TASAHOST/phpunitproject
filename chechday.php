<?php
include "MyCalendar.php";

$nday = $_POST["nday"];
$nmonth = $_POST["nmonth"];

$c1 = new Mycalendar();

echo "Day name is".$c1->checkDayofDate($nday,$nmonth);