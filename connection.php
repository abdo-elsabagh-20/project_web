<?php
$link = mysqli_connect("localhost", "root", "", "project_web");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}
