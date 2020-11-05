<?php

namespace Simonov;
class Equ
{
    protected $x;

    public function equ($a, $b)
    {
        if ($a == 0) {
            return null;
        }
        $x = array(-($b/$a));
        $this->x = $x;
        return $x;
    }
}