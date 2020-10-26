<?php


class BerlinClock {

    public function convert(int $hours, int $minutes, int $seconds):array {
        $res = self::emptyClock();
        $res = $this->modifyFiveHours($res, $hours);
        $res = $this->modifySingleHours($res, $hours%5);
        $res = $this->modifyFiveMinutes($res, $minutes);
        $res = $this->modifySingleMinutes($res, $minutes%5);
        if($seconds===1 || $seconds===3 || $seconds===5){
            $res[0][0]="R";
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
            $clock[4][$i] = "Y";
        }
        return $clock;
    }

    private function modifyFiveMinutes(array $clock, int $minutes): array {
        for ($i = 5; $i <= $minutes; $i += 5) {
            if ($i%15===0) {
                $clock[3][($i / 5) - 1] = "R";
            } else {
                $clock[3][($i / 5) - 1] = "Y";
            }
        }
        return $clock;
    }

    private function modifySingleHours(array $clock, int $hours): array {
        for ($i = 0; $i < $hours; $i++) {
            $clock[2][$i] = "R";
        }
        return $clock;
    }

    private function modifyFiveHours(array $clock, int $hours): array {
        for ($i = 5; $i <= $hours; $i += 5) {
            $clock[1][($i / 5) - 1] = "R";
        }
        return $clock;
    }
}