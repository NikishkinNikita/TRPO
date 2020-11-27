<?php

namespace Nikita;


class ClassLine
{

    protected function line($a, $b)
    {
        if ($a == 0) {
            return null;
        }
        return $this->x = -$b / $a;
    }

    protected $x;
}
