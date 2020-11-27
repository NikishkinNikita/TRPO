<?php
include "core/LogAbstract.php";
include "core\LogInterface.php";
include "core\EquationInterface.php";
include "Nikita\ClassLine.php";
include "Nikita\ClassSquare.php";
include "Nikita\MyLog.php";

ini_set("display_errors", 1); error_reporting (-1);

Nikita\MyLog::log("Hello");
Nikita\MyLog::log("world!");
Nikita\MyLog::write();
?>