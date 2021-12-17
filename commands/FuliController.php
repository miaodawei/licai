<?php

namespace app\commands;

use yii\console\Controller;

class FuliController extends Controller
{
    public function actionDingtouFuli()
    {
        $monthPrice = 1000; // 月定投1000
        $yearAddPrice = $monthPrice * 12; // 年本金
        $benjin = 0;
        $years = 54;
        $nlv = 0.15; // 年利率15%
        $i = 1;
        while ($i <= $years) {
            $benjin += $yearAddPrice;
            $lixi = $benjin * $nlv;
            echo '第' . $i . '年本金：' . $benjin . '，利息：' . $lixi;
            $benjin += $lixi;
            echo '总额：' . $benjin . PHP_EOL;
            $i++;
        }
        echo '总额：' . $benjin . PHP_EOL;
    }
}
