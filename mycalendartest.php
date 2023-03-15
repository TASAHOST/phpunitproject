<?php declare(strict_types=1);
include "MyCalendar.php";
use PHPUnit\Framework\TestCase;

class MyCalendartest extends TestCase {
    public function testCheckDayofDate(){
        $c1 = new Mycalendar();
        $this->assertEquals("wednesday",  $c1->checkDayofDate("15","03"));
    }


}