<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = self::emptyClock();
        $res = $this->modifySingleMinutes($res, $minutes);
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

    private function modifySingleMinutes(array $clock, int $minutes): array {
        for ($i = 0; $i < $minutes; $i++) {
            $clock[4][$i] = "J";
        }
        return $clock;
    }
}