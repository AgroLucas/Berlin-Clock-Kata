<?php


class BerlinClock {

    public function convert(int $hours, int $minutes, int $seconds):array {
        $res = self::emptyClock();
        if($hours === 1) {
            $res[2][0]="R";
        }elseif ($hours === 2){
            $res[2][0]="R";
            $res[2][1]="R";
        }
        $res = $this->modifyFiveMinutes($res, $minutes);
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
}