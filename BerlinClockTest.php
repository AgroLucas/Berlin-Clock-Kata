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

    public function test_convert_given00H00M00S_shouldReturnXVxxxxVxxxxVxxxxxxxxxxxVxxxx(){
        $expected = $this->emptyClock;

        $actual = $this->berlinClock->convert(0,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H01M00S_shouldReturnXVxxxxVxxxxVxxxxxxxxxxxVyxxx() {
        $expected = $this->emptyClock;
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,1,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H02M00S_shouldReturnXVxxxxVxxxxVxxxxxxxxxxxVyyxx() {
        $expected = $this->emptyClock;
        $expected[4][0]="Y";
        $expected[4][1]="Y";

        $actual = $this->berlinClock->convert(0,2,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H03M00S_shouldReturnXVxxxxVxxxxVxxxxxxxxxxxVyyyx() {
        $expected = $this->emptyClock;
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";

        $actual = $this->berlinClock->convert(0,3,0);

        $this->assertEquals($expected, $actual);
    }

    //STEP 2 -> 5MinutesLights

    public function test_convert_given00H05M00S_shouldReturnXVxxxxVxxxxVyxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";

        $actual = $this->berlinClock->convert(0,5,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H06M00S_shouldReturnXVxxxxVxxxxVyxxxxxxxxxxVyxxx() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,6,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H07M00S_shouldReturnXVxxxxVxxxxVyxxxxxxxxxxVyyxx() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";

        $actual = $this->berlinClock->convert(0,7,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H09M00S_shouldReturnXVxxxxVxxxxVyxxxxxxxxxxVyyyy() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[4][0]="Y";
        $expected[4][1]="Y";
        $expected[4][2]="Y";
        $expected[4][3]="Y";

        $actual = $this->berlinClock->convert(0,9,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H10M00S_shouldReturnXVxxxxVxxxxVyyxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";

        $actual = $this->berlinClock->convert(0,10,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H11M00S_shouldReturnXVxxxxVxxxxVyyxxxxxxxxxVyxxx() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,11,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H15M00S_shouldReturnXVxxxxVxxxxVyyrxxxxxxxxVxxxx(){
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";

        $actual = $this->berlinClock->convert(0,15,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H16M00S_shouldReturnXVxxxxVxxxxVyyrxxxxxxxxVyxxx() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[4][0]="Y";

        $actual = $this->berlinClock->convert(0,16,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H20M00S_shouldReturnXVxxxxVxxxxVyyryxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[3][0]="Y";
        $expected[3][1]="Y";
        $expected[3][2]="R";
        $expected[3][3]="Y";

        $actual = $this->berlinClock->convert(0,20,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H30M00S_shouldReturnXVxxxxVxxxxVyyryyrxxxxxVxxxx(){
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

    public function test_convert_given00H45M00S_shouldReturnXVxxxxVxxxxVyyryyryyrxxVxxxx(){
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

    public function test_convert_given00H59M00S_shouldReturnXVxxxxVxxxxVyyryyryyryyVyyyy(){
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

    public function test_convert_given01H00M00S_shouldReturnXVxxxxVrxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[2][0]="R";

        $actual = $this->berlinClock->convert(1,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given02H00M00S_shouldReturnXVxxxxVrrxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[2][0]="R";
        $expected[2][1]="R";

        $actual = $this->berlinClock->convert(2,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given03H00M00S_shouldReturnXVxxxxVrrrxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[2][0]="R";
        $expected[2][1]="R";
        $expected[2][2]="R";

        $actual = $this->berlinClock->convert(3, 0, 0);

        $this->assertEquals($expected, $actual);
    }

    // STEP 4 -> 5HoursLights

    public function test_convert_given05H00M00S_shouldReturnXVrxxxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";

        $actual = $this->berlinClock->convert(5,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given06H00M00S_shouldReturnXVrxxxVrxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[2][0]="R";

        $actual = $this->berlinClock->convert(6, 0, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given07H00M00S_shouldReturnXVrxxxVrrxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[2][0]="R";
        $expected[2][1]="R";

        $actual = $this->berlinClock->convert(7,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given10H00M00S_shouldReturnXVrrxxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";

        $actual = $this->berlinClock->convert(10, 0, 0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given11H00M00S_shouldReturnXVrrxxVrxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[2][0]="R";

        $actual = $this->berlinClock->convert(11,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given12H00M00S_shouldReturnXVrrxxVrrxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[2][0]="R";
        $expected[2][1]="R";

        $actual = $this->berlinClock->convert(12,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given15H00M00S_shouldReturnXVrrrxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[1][0]="R";
        $expected[1][1]="R";
        $expected[1][2]="R";

        $actual = $this->berlinClock->convert(15,0,0);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given22H00M00S_shouldReturnXVrrrrVrrxxVxxxxxxxxxxxVxxxx() {
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

    public function test_convert_given00H00M01S_shouldReturnRVxxxxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[0][0]="R";

        $actual = $this->berlinClock->convert(0,0,1);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M02S_shouldReturnXVxxxxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;

        $actual = $this->berlinClock->convert(0,0,2);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M03S_shouldReturnRVxxxxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[0][0]="R";

        $actual = $this->berlinClock->convert(0,0,3);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M04S_shouldReturnXVxxxxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;

        $actual = $this->berlinClock->convert(0,0,4);

        $this->assertEquals($expected, $actual);
    }

    public function test_convert_given00H00M05S_shouldReturnRVxxxxVxxxxVxxxxxxxxxxxVxxxx() {
        $expected = $this->emptyClock;
        $expected[0][0]="R";

        $actual = $this->berlinClock->convert(0,0,5);

        $this->assertEquals($expected, $actual);
    }

    //STEP 666 UTLIMATE TEST OF DOOM

    public function test_convert_given23H59M59S_shouldReturnRVrrrrVrrrrVyyryyryyrxVyyyy() {
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

    public function test_convert_given25H460M4655685S_shouldReturnNULL() {
        $expected = NULL;

        $actual = $this->berlinClock->convert(25, 460, 4655685);

        $this->assertEquals($expected, $actual);
    }

}
