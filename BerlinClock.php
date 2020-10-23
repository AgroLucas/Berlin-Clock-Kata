<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = self::emptyClock();
        if($minutes!==0) {
            $res[4][0] = "J";
            if($minutes===2) {
                $res[4][1] = "J";
            }
        }
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