<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = array(
            array(""),
            array("", "", "", ""),
            array("", "", "", ""),
            array("", "", "", "", "", "", "", "", "", "", ""),
            array("J", "", "", "")
        );
        return $res;
    }
}