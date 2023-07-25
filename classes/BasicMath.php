<?php
class BasicMath {
    private $initialValue;
    const VERSION = '1.0 🆕';

    public function __construct(int $n) 
    {
        $this->initialValue = $n;
    }
    public function sum(int $x, int $y) {
        return $x + $y;
    }
}


