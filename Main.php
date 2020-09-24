<?php

require_once('./objects/MathProblem.php');
require_once('./objects/Person.php');
require_once('./utility/Utils.php');

$add = new MathProblem(5, 3, ProblemType::ADDITION);
$sub = new MathProblem(10, 5, ProblemType::SUBTRACTION);
$mult = new MathProblem(3, 8, ProblemType::MULTIPLICATION);
$div = new MathProblem(36, 6, ProblemType::DIVISION);

echo "<h1>Php Reference Document</h1>";

// Objects in general
// MathProblem Object
echo "<h4>MathProblem Object</h4>";

echo $add . "<br>";
echo $sub . "<br>";
echo $mult . "<br>";
echo $div . "<br>";

// Person/Student Object

echo "<br><h4>Person/Student Objects</h4>";

echo new Person("Cody", "Alexander") . "<br>";
echo new Student("Hailey", "Griffith", 4.0);

// DateTime comparisons

echo "<br><h4>DateTime comparisons</h4>";

$nowDateTime = new DateTime();
echo "Starting @ " . $nowDateTime->format('H:i:s') . "<br>";
$skipInterval = new DateInterval("PT10S");
$nextDateTime = $nowDateTime->add($skipInterval);
echo "Resetting @ " . $nextDateTime->format('H:i:s') . "<br>";

echo ((new DateTime())->format('H:i:s') . "   <   " . 
    $nextDateTime->format('H:i:s') . ": " . 
    ((new DateTime() < $nextDateTime) ? "True" : "False"));

// Calls
echo "<br><h4>API Calls</h4>";

$url = "localhost:3001/api/";
echo "GET @ " . $url . ": " .  CallAPI("GET", $url);
$data = array(
    "id" => 3,
    "name" => "Cody"
);
echo "<br>PUT @ " . ($url . "submitweather") . ": " .  CallAPI("PUT", ($url . "submitweather"), http_build_query($data));
