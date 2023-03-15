<?php

class MyCalendar
{
    public function checkDayofDate($nday,$nmonth){

        $input_data = $nday."/".$nmonth."/"."2023";
        $datetime = DateTime::createFromFormat('d/m/Y', $input_data);
        return $datetime->format('l');
        
    }
}