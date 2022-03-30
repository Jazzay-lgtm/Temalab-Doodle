<?php

namespace Tests\Unit;

use DateValidates;
use PHPUnit\Framework\TestCase;

require 'DatesValidates.php';

class DateTest extends TestCase
{
    public function test_date_later_now_date_01(){
        $dates = new DateValidates();
        $this->assertEquals(false,$dates->startDateLaterNowDate('2020-03-07 11:00'),"rossz idópont");
    }
    public function test_date_later_now_date_02(){
        $startDate = time();
        $dateFuture = date('Y-m-d H:i', strtotime('+1 day', $startDate));
        $dates = new DateValidates();
        $this->assertEquals(true,$dates->startDateLaterNowDate($dateFuture),"jó időpont");
    }
}
