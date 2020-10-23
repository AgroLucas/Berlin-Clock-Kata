<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = self::emptyClock();
        for ($i=0; $i<$minutes; $i++) {
            $res[4][$i]="J";
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