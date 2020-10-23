<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = self::emptyClock();
        $res[4][0] = "J";
        return $res;
    }

    public static function emptyClock():array {
        return array(
            array(""),
            array("", "", "", ""),
            array("", "", "", ""),
            array("", "", "", "", "", "", "", "", "", "", ""),
            array("", "", "", "")
        );
    }

}