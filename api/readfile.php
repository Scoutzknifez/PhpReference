<?php

$fileLoc = fopen("D:\\SampleTextFiles\\" . $_GET["filename"] . ".txt", "r");

$looping = true;
while ($looping) {
    
    $next_line = fgets($fileLoc);

    if (!$next_line)
        $looping = false;
    else 
        echo $next_line . "<br>";
}