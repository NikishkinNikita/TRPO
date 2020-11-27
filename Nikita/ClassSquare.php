<?php

namespace Nikita;

use core\EquationInterface as EquationInterfaceAlias;

class ClassSquare extends ClassLine implements EquationInterfaceAlias
{

    public function solve($a, $b, $c)
    {

        if ($a == 0) {
            return parent::line($b, $c);
        }
        $d = $this->discriminant($a, $b, $c);

        MyLog::log("Определено, что это квадратное уравнение");

        if ($d == 0) {
            return $this->x = array((-$b) / (2 * $a));
        }

        if ($d > 0) {
            $d = sqrt($d);
            return $this->x = array((-$b + $d) / (2 * $a), (-$b - $d) / (2 * $a));
        }
        Throw new NikitaExeption("Ошибка: уравнение не имеет решений");
    }


    protected function discriminant($a, $b, $c)
    {
        return (float)(($b ** 2) - 4 * $a * $c);
    }
}
