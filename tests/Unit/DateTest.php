<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require 'DatesValidates.php';

class DateTest extends TestCase
{
    public function test_date_later_now_date_01(){
        $this->assertFalse([\DateValidates::class,'startDateLaterNowDate'('2020-03-07 11:00')]);
    }
    public function test_date_later_now_date_02(){
        $startDate = time();
        $dateFuture = date('Y-m-d H:i', strtotime('+1 day', $startDate));
        $this->assertTrue([\DateValidates::class,'startDateLaterNowDate'($dateFuture)]);
    }
}
