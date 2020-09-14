<?php

require_once('./objects/MathProblem.php');

$add = new MathProblem(5, 3, ProblemType::ADDITION);
$sub = new MathProblem(10, 5, ProblemType::SUBTRACTION);
$mult = new MathProblem(3, 8, ProblemType::MULTIPLICATION);
$div = new MathProblem(36, 6, ProblemType::DIVISION);

echo "<h1>Php Reference Document</h1>";
echo "<h4>MathProblem Object</h4>";

echo $add->print() . "<br>";
echo $sub->print() . "<br>";
echo $mult->print() . "<br>";
echo $div->print() . "<br>";