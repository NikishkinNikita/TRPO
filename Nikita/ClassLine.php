<?php

namespace Nikita;


class ClassLine
{

    protected function line($a, $b)
    {
        if ($a == 0 ) {
            Throw new NikitaExeption("Определено, что такое уравнение не существует");
        }
        MyLog::log("Введено уравнение " . $a . "x+" . $b."=0");
        MyLog::log("Определено, что это линейное уравнение");
        return $this->x = array(-$b / $a);
    }

    protected $x;
}
