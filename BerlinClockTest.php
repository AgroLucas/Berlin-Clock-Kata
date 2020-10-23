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

    //STEP 1

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

    public function test_convert_given00H02M00S_shouldReturn1And2MinutesLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[4][0]="J";
        $expected[4][1]="J";

        $actual = $this->berlinClock->convert(0, 2, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H03M00S_shouldReturn1And2And3MinutesLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[4][0]="J";
        $expected[4][1]="J";
        $expected[4][2]="J";

        $actual = $this->berlinClock->convert(0,3,0);

        $this->assertEquals($expected, $actual);
    }

    //STEP 2

    public function test_convert_given00H05M00S_shouldReturnFirstFiveMinutesLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="J";

        $actual = $this->berlinClock->convert(0, 5, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H06M00S_shouldReturnFirstFiveMinutesAndFirstSingleMinutesLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="J";
        $expected[4][0]="J";

        $actual = $this->berlinClock->convert(0,6,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H07M00S_shouldReturnFirstFiveMinutesAnd1And2SingleMinutesLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="J";
        $expected[4][0]="J";
        $expected[4][1]="J";

        $actual = $this->berlinClock->convert(0, 7, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H09M00S_shouldReturnFirstFiveMinutesAndAllSingleMinutesLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="J";
        $expected[4][0]="J";
        $expected[4][1]="J";
        $expected[4][2]="J";
        $expected[4][3]="J";


        $actual = $this->berlinClock->convert(0,9,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H10M00S_shouldReturn1And2FiveMinutesLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="J";
        $expected[3][1]="J";
        
        $actual = $this->berlinClock->convert(0,10,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H11M00S_shouldReturn1And2FiveMinutesAndFirstSingleMinuteLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="J";
        $expected[3][1]="J";
        $expected[4][0]="J";

        $actual = $this->berlinClock->convert(0,11,0);

        $this->assertEquals($expected, $actual);
    }

}
