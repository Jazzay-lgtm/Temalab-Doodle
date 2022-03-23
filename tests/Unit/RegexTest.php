<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Regex;

require 'Regex.php';
class RegexTest extends TestCase
{


    public function test_email_regex()
    {
        $regex = new Regex();
        $value = 'jani.nagy@example.com';
        $assertValue1 = $regex->email_regex($value);
        $this->assertEquals(true,$assertValue1,"nem jó email cím");
    }
    public function test_name_regex()
    {
        $regex = new Regex();
        $this->assertEquals(true,$regex->name_regex('Nagy Jani'),"nem jó név");

    }
}
