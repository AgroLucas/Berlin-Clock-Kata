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

    public function test_convert_given00H00M00S_shouldReturnEmptyClock(){
        $expected = BerlinClock::emptyClock();

        $actual = $this->berlinClock->convert(0,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H01M00S_shouldReturnFirstMinuteLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[4][0]="J";

        $actual = $this->berlinClock->convert(0, 1, 0);

        $this->assertEquals($expected, $actual);
    }

}
