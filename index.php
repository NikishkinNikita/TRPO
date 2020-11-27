<?php

use Nikita\ClassSquare;
use Nikita\MyLog;
use Nikita\NikitaExeption;

include "core/LogAbstract.php";
include "core/LogInterface.php";
include "core/EquationInterface.php";
include "Nikita/ClassLine.php";
include "Nikita/ClassSquare.php";
include "Nikita/MyLog.php";
include "Nikita/NikitaExeption.php";

ini_set("display_errors", 1);
error_reporting(-1);

try {
    $v = array();
    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . " аргумент:";
        $v[] = readline();
    }
    $a = (float)$v[0];
    $b = (float)$v[1];
    $c = (float)$v[2];


    MyLog::log("Введено уравнение " . $a . "x^2+" . $b . "x+" . $c . "=0");


    $classSquare = new ClassSquare();
    $x = $classSquare->solve($a, $b, $c);

    $s = implode(", ", $x);

    MyLog::log("Корни уравнения: " . $s);
} catch (NikitaExeption $e) {
    MyLog::log($e->getMessage());
}
Nikita\MyLog::write();
?>