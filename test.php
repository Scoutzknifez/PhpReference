<?php

require_once('MathProblem.php');

$add = new MathProblem(5, 3, ProblemType::ADDITION);
$sub = new MathProblem(10, 5, ProblemType::SUBTRACTION);
$mult = new MathProblem(3, 8, ProblemType::MULTIPLICATION);
$div = new MathProblem(36, 6, ProblemType::DIVISION);

echo $add->print();
echo "<br>";
echo $sub->print();
echo "<br>";
echo $mult->print();
echo "<br>";
echo $div->print();