<?php

class A {

    public function equ($a, $b) {

        if ($a == 0) {

            return null;

        }
        $x = -($b/$a);
        $this->x = $x;
        return $x;

    }

    protected $x;

}

class B extends A {

    protected function dis($a, $b, $c) {

        $d = ($b**2)-4*$a*$c;

        return $d;

    }

    public function  solve($a, $b, $c) {

        $x = $this->dis($a, $b, $c);
        if ($a == 0) {

            return $this->equ($b, $c);

        }

        if ($x > 0) {

            return $this->X=array(

                ((-$b + sqrt($x)) / (2 * $a)),
                ((-$b - sqrt($x)) / (2 * $a))
            );

            }

        if ($x < 0) {

            return $this->X=null;

        }
        
        return $this->x = (-$b) / 2 * $a;

        }

    }
