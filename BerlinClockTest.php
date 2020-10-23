<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase {

    private $berlinClock;

    protected function setUp(): void {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    public function test_convert_given00H01M00S_shouldReturnFirstMinuteLightYellow() {

        $expected = array(
        array(""),
        array("", "", "", ""),
        array("", "", "", ""),
        array("", "", "", "", "", "", "", "", "", "", ""),
        array("J", "", "", "")
        );

        $actual = $this->berlinClock->convert(0, 1, 0);

        $this->assertEquals($expected, $actual);
    }

}
