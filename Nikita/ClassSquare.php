<?php

namespace Nikita;

use core\EquationInterface as EquationInterfaceAlias;

class ClassSquare extends ClassLine implements EquationInterfaceAlias
{

    function solve($a, $b, $c)
    {
        if ($a == 0) return parent::line($b, $c);
        $d = $this->discriminant($a, $b, $c);

        if ($d == 0) {
            $d = sqrt($d);
            return $this->x = array((-$b + $d) / (2 * $a));
        }

        if ($d > 0) {
            $d = sqrt($d);
            return $this->x = array((-$b + $d) / (2 * $a), (-$b - $d) / (2 * $a));
        }

        return null;
    }

    protected function discriminant($a, $b, $c)
    {
        return (($b * $b) - 4 * $a * $c);
    }
}
