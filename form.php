<?php

if (isset($_POST["time"])) {
    $time = $_POST["time"];

    echo "Your average travel time on the New York City subway is $time hours"
}
else {
    echo "Please provide a real number"
}