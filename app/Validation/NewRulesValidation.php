<?php

namespace App\Validation;

use DateTime;

date_default_timezone_set('Asia/Manila');

class NewRulesValidation
{
    public function isGmail($value)
    {
        if (preg_match("/@gmail.com/i", $value)) {
            return true;
        }
        return false;
    }
    public function isTaken($value)
    {
        if ((int)$value === 0) {
            return false;
        }
        return true;
    }
    public function isLate($value)
    {
        $current = new \DateTime();
        $newDate = \DateTime::createFromFormat('Y-m-d', $value);
        if ($newDate <= $current) {
            return false;
        }
        return true;
    }
    public function noTime($value)
    {
        $times = ['15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'];
        foreach ($times as $time) {
            $part = explode(":", $time);
            if ((int)$value < (int)$part[0]) {
                return false;
            }
        }
        return true;
    }
    public function isPayment($value)
    {
        if ($value === "None") {
            return false;
        }
        return true;
    }
}
