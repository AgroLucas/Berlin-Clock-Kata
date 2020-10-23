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
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0, 1, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H02M00S_shouldReturn1And2MinuteLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[4][0]="Y";
        $expected[4][1]="Y";

        $actual = $this->berlinClock->convert(0, 2, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H03M00S_shouldReturn1And2And3MinuteLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";

        $actual = $this->berlinClock->convert(0,3,0);

        $this->assertEquals($expected, $actual);
    }

    //STEP 2

    public function test_convert_given00H05M00S_shouldReturnFirstFiveMinutesLightYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";

        $actual = $this->berlinClock->convert(0, 5, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H06M00S_shouldReturnFirstFiveMinutesAndFirstSingleMinuteLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,6,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H07M00S_shouldReturnFirstFiveMinutesAnd1And2SingleMinuteLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";

        $actual = $this->berlinClock->convert(0, 7, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H09M00S_shouldReturnFirstFiveMinutesAndAllSingleMinuteLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";
        $expected[4][3]="Y";

        $actual = $this->berlinClock->convert(0,9,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H10M00S_shouldReturn1And2FiveMinutesLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[3][1]="Y";

        $actual = $this->berlinClock->convert(0,10,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H11M00S_shouldReturn1And2FiveMinutesAndFirstSingleMinuteLightsYellow() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,11,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H15M00S_shouldReturn1And2FiveMinutesLightsYellowAnd3FiveMinutesLightsRed(){
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";

        $actual = $this->berlinClock->convert(0,15,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H16M00S_shouldReturn1And2FiveMinutesAndFirstSingleMinuteLightsYellowAnd3FiveMinutesLightRed() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0, 16, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H20M00S_shouldReturn1And2And4FiveMinutesLightsYellowAnd3FiveMinutesLightRed() {
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[3][3]="Y";

        $actual = $this->berlinClock->convert(0, 20, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H30M00S_shouldReturn1And2And4And5FiveMinutesLightsYellowAnd3And6FiveMinutesLightsRed(){
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[3][3]="Y";
        $expected[3][4]="Y";
        $expected[3][5]="R";

        $actual = $this->berlinClock->convert(0,30,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H45M00S_shouldReturn1And2And4And5And7And8FiveMinutesLightsYellowAnd3And6And9FiveMinutesLightsRed(){
        $expected = BerlinClock::emptyClock();
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[3][3]="Y";
        $expected[3][4]="Y";
        $expected[3][5]="R";
        $expected[3][6]="Y";
        $expected[3][7]="Y";
        $expected[3][8]="R";

        $actual = $this->berlinClock->convert(0,45,0);

        $this->assertEquals($expected, $actual);
    }
}
