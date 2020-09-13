<?php

require_once("../HiddenConstants.php");

$connection = new mysqli(server_ip, username, password, db_name);

$error = $connection->connect_error;
if ($error) {
    die("Connection failed: " . $error);
}

$sql = "SELECT * FROM WEATHER_FOR_TIME";
$result = $connection->query($sql);

$weather_list = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $weather_for_time = array(
            "time"=>$row["time"],
            "latitude"=>$row["latitude"],
            "longitude"=>$row["longitude"],
            "temperature"=>$row["temperature"],
            "windSpeed"=>$row["windSpeed"],
            "windBearing"=>$row["windBearing"]
        );

        array_push($weather_list, $weather_for_time);
    }
} else {
    echo "0 results";
}

$connection->close();

// echo $result->num_rows;
echo json_encode($weather_list);