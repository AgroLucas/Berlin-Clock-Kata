<?php


class BerlinClock {

    public function convert(int $hours, int $minutes, int $seconds): ?array {
        if (!$this->isValidTime($hours, $minutes, $seconds))
            return NULL;
        $res = self::emptyClock();
        $res = $this->modifyFiveHours($res, $hours);
        $res = $this->modifySingleHours($res, $hours%5);
        $res = $this->modifyFiveMinutes($res, $minutes);
        $res = $this->modifySingleMinutes($res, $minutes%5);
        $res = $this->modifySeconds($res, $seconds);
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

    private function modifyFiveHours(array $clock, int $hours): array {
        for ($i = 5; $i <= $hours; $i += 5) {
            $clock[1][($i / 5) - 1] = "R";
        }
        return $clock;
    }

    private function modifySingleHours(array $clock, int $hours): array {
        for ($i = 0; $i < $hours; $i++) {
            $clock[2][$i] = "R";
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

    private function modifySingleMinutes(array $clock, int $minutes): array {
        for ($i = 0; $i < $minutes; $i++) {
            $clock[4][$i] = "Y";
        }
        return $clock;
    }

    private function modifySeconds(array $clock, int $seconds): array {
        if ($seconds % 2 === 1) {
            $clock[0][0] = "R";
        }
        return $clock;
    }

    private function isValidTime(int $hours, int $minutes, int $seconds): bool {
        if ($hours < 0 || $hours > 23)
            return false;
        if ($minutes < 0 || $minutes > 59)
            return false;
        if ($seconds < 0 || $seconds > 59)
            return false;
        return true;
    }
}