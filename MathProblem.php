<?php

class ProblemType {
    const ADDITION = "+";
    const SUBTRACTION = "-";
    const MULTIPLICATION = "x";
    const DIVISION = "/";
}

class MathProblem {


    public function __construct($first, $second, $problemType) {
        $this->a = $first;
        $this->b = $second;
        $this->pt = $problemType;
    }

    public function solve() {
        if ($this->pt == ProblemType::ADDITION)
            return $this->a + $this->b;
        elseif ($this->pt == ProblemType::SUBTRACTION)
            return $this->a - $this->b;
        elseif ($this->pt == ProblemType::MULTIPLICATION)
            return $this->a * $this->b;
        elseif ($this->pt == ProblemType::DIVISION)
            return $this->a / $this->b;
    }

    public function print() {
        echo $this->a . $this->pt . $this->b . "=" . $this->solve();
    }
}