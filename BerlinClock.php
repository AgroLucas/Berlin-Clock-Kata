<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = self::emptyClock();
        $res = $this->modifyFiveMinutes($minutes, $res);
        $res=$this->modifySingleMinutes($res, $minutes%5);
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
            $clock[4][$i] = "Y";
        }
        return $clock;
    }

    private function modifyFiveMinutes(int $minutes, array $clock): array {
        for ($i = 5; $i <= $minutes; $i += 5) {
            if ($i === 15) {
                $clock[3][($i / 5) - 1] = "R";
            } else {
                $clock[3][($i / 5) - 1] = "Y";
            }
        }
        return $clock;
    }
}