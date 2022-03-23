<?php

namespace App\Libraries;

use App\Models\User;

class Functions
{
    public static function dayList()
    {
        $year = "";
        $month = "";
        $day = "";
        $y = date('Y', strtotime('+1 year'));
        $yearPast = date('Y', strtotime('-1 year'));
        for ($y; $y  >= $yearPast; $y--) {
            $year .= '<option value="' . $y . '">' . $y . '年</option>';
            $year .= '<option hidden selected value="' . date('Y') . '">' . date('Y') . '月</option>';
        }

        for ($m = 1; $m <= 12; $m++) {
            $month .= '<option value="' . $m . '">' . $m . '月</option>';
            $month .= '<option hidden selected value="' . date('m') . '">' . date('m') . '月</option>';
        }

        $day = '<option hidden selected value="' . date('d') . '">' . date('j') . '日</option>';

        echo '
          <select id ="year" class="ml-2 py-1 mb-3" name="year" >' . $year . '</select>
          <select id="month" class="ml-2 py-1 mb-3" name="month">' . $month . '</select>
          <select id ="date" class="ml-2 py-1 mb-3" name="date">' . $day . '</select>
          ';
    }
}
