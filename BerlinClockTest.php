<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase {

    private $berlinClock;
    private $emptyClock;

    protected function setUp(): void {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
        $this->emptyClock = BerlinClock::emptyClock();
    }

    //STEP 1 -> SingleMinuteLights

    public function test_convert_given00H00M00S_shouldReturnEmptyClock(){
        $expected = $this->emptyClock;

        $actual = $this->berlinClock->convert(0,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H01M00S_shouldReturnFirstMinuteLightYellow() {
        $expected = $this->emptyClock;
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,1,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H02M00S_shouldReturn1And2MinuteLightsYellow() {
        $expected = $this->emptyClock;
        $expected[4][0]="Y";
        $expected[4][1]="Y";

        $actual = $this->berlinClock->convert(0,2,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H03M00S_shouldReturn1To3MinuteLightsYellow() {
        $expected = $this->emptyClock;
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";

        $actual = $this->berlinClock->convert(0,3,0);

        $this->assertEquals($expected, $actual);
    }

    //STEP 2 -> 5MinutesLights

    public function test_convert_given00H05M00S_shouldReturnFirstFiveMinutesLightYellow() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";

        $actual = $this->berlinClock->convert(0,5,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H06M00S_shouldReturnFirstFiveMinutesAndFirstSingleMinuteLightsYellow() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,6,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H07M00S_shouldReturnFirstFiveMinutesAnd1And2SingleMinuteLightsYellow() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";

        $actual = $this->berlinClock->convert(0,7,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H09M00S_shouldReturnFirstFiveMinutesAndAllSingleMinuteLightsYellow() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";
        $expected[4][3]="Y";

        $actual = $this->berlinClock->convert(0,9,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H10M00S_shouldReturn1And2FiveMinutesLightsYellow() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";

        $actual = $this->berlinClock->convert(0,10,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H11M00S_shouldReturn1And2FiveMinutesAndFirstSingleMinuteLightsYellow() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,11,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H15M00S_shouldReturn1And2FiveMinutesLightsYellowAnd3FiveMinutesLightsRed(){
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";

        $actual = $this->berlinClock->convert(0,15,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H16M00S_shouldReturn1And2FiveMinutesAndFirstSingleMinuteLightsYellowAnd3FiveMinutesLightRed() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,16,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H20M00S_shouldReturn1And2And4FiveMinutesLightsYellowAnd3FiveMinutesLightRed() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[3][3]="Y";

        $actual = $this->berlinClock->convert(0,20,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H30M00S_shouldReturn1And2And4And5FiveMinutesLightsYellowAnd3And6FiveMinutesLightsRed(){
        $expected = $this->emptyClock;
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
        $expected = $this->emptyClock;
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

    public function test_convert_given00H59M00S_shouldReturnAllSingleMinuteLightsAnd1And2And4And5And7And8And10And11FiveMinutesLightsYellowAnd3And6And9FiveMinutesLightsRed(){
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[3][3]="Y";
        $expected[3][4]="Y";
        $expected[3][5]="R";
        $expected[3][6]="Y";
        $expected[3][7]="Y";
        $expected[3][8]="R";
        $expected[3][9]="Y";
        $expected[3][10]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";
        $expected[4][3]="Y";

        $actual = $this->berlinClock->convert(0,59,0);

        $this->assertEquals($expected, $actual);
    }

    //STEP 3 -> SingleHourLights

    public function test_convert_given01H00M00S_shouldReturnFirstSingleHourLightRed() {
        $expected = $this->emptyClock;
        $expected[2][0]="R";

        $actual = $this->berlinClock->convert(1,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given02H00M00S_shouldReturn1And2SingleHourLightsRed() {
        $expected = $this->emptyClock;
        $expected[2][0]="R";
        $expected[2][1]="R";

        $actual = $this->berlinClock->convert(2,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given03H00M00S_shouldReturn1To3SingleHourLightsRed() {
        $expected = $this->emptyClock;
        $expected[2][0]="R";
        $expected[2][1]="R";
        $expected[2][2]="R";

        $actual = $this->berlinClock->convert(3, 0, 0);

        $this->assertEquals($expected, $actual);
    }

    // STEP 4 -> 5HoursLights

    public function test_convert_given05H00M00S_shouldReturnFirstFiveHoursLightRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";

        $actual = $this->berlinClock->convert(5,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given06H00M00S_shouldReturnFirstSingleHourLightAndFirstFiveHoursLightRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[2][0]="R";

        $actual = $this->berlinClock->convert(6, 0, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given07H00M00S_shouldReturn1And2SingleHourLightsAndFirstFiveHoursLightRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[2][0]="R";
        $expected[2][1]="R";

        $actual = $this->berlinClock->convert(7,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given10H00M00S_shouldReturn1And2FiveHoursLightsRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";

        $actual = $this->berlinClock->convert(10, 0, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given11H00M00S_shouldReturnFirstSingleHourLightAnd1And2FiveHoursLightsRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[2][0]="R";

        $actual = $this->berlinClock->convert(11,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given12H00M00S_shouldReturn1And2SingleHourLightsAnd1And2FiveHoursLightsRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[2][0]="R";
        $expected[2][1]="R";

        $actual = $this->berlinClock->convert(12,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given15H00M00S_shouldReturn1To3FiveHoursLightsRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[1][2]="R";

        $actual = $this->berlinClock->convert(15,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given22H00M00S_shouldReturn1And2SingleHourLightsAnd1To4FiveHoursLightsRed() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[1][2]="R";
        $expected[1][3]="R";
        $expected[2][0]="R";
        $expected[2][1]="R";

        $actual = $this->berlinClock->convert(22,0,0);

        $this->assertEquals($expected, $actual);
    }

    // STEP 5 -> Seconds

    public function test_convert_given00H00M01S_shouldReturnSecondsLightRed() {
        $expected = $this->emptyClock;
        $expected[0][0]="R";

        $actual = $this->berlinClock->convert(0,0,1);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M02S_shouldReturnEmptyClock() {
        $expected = $this->emptyClock;

        $actual = $this->berlinClock->convert(0,0,2);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M03S_shouldReturnSecondsLightRed() {
        $expected = $this->emptyClock;
        $expected[0][0]="R";

        $actual = $this->berlinClock->convert(0,0,3);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M04S_shouldReturnEmptyClock() {
        $expected = $this->emptyClock;

        $actual = $this->berlinClock->convert(0,0,4);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M05S_shouldReturnSecondsLightRed() {
        $expected = $this->emptyClock;
        $expected[0][0]="R";

        $actual = $this->berlinClock->convert(0,0,5);

        $this->assertEquals($expected, $actual);
    }

    //STEP 666 UTLIMATE TEST OF DOOM

    public function test_convert_given23H59M59S_shouldReturnAllSingleMinuteLightsAnd1And2And4And5And7And8And10And11FiveMinutesLightsYellowAnd3And6And9FiveMinutesLightsAnd1To3SingleHourLightsAndAllFiveHoursLightsAndSecondsLightRed() {
        $expected = $this->emptyClock;
        $expected[0][0]="R";
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[1][2]="R";
        $expected[1][3]="R";
        $expected[2][0]="R";
        $expected[2][1]="R";
        $expected[2][2]="R";
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[3][3]="Y";
        $expected[3][4]="Y";
        $expected[3][5]="R";
        $expected[3][6]="Y";
        $expected[3][7]="Y";
        $expected[3][8]="R";
        $expected[3][9]="Y";
        $expected[3][10]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";
        $expected[4][3]="Y";

        $actual = $this->berlinClock->convert(23,59,59);

        $this->assertEquals($expected, $actual);
    }
}
