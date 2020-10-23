<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = self::emptyClock();
        if ($minutes>=5) {
            $res[3][0] = "J";
            for ($i = 0; $i < $minutes-5; $i++) {
                $res[4][$i] = "J";
            }
        }else{
            $res = $this->modifySingleMinutes($res, $minutes);
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

    private function modifySingleMinutes(array $clock, int $minutes): array {
        for ($i = 0; $i < $minutes; $i++) {
            $clock[4][$i] = "J";
        }
        return $clock;
    }
}