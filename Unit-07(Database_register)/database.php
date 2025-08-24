<?php
require __DIR__ . "/config.php";

$conn = mysqli_connect(
    $config["database"]["db_server"],
    $config["database"]["db_user"],
    $config["database"]["db_password"],
    $config["database"]["db_name"]
);

if ($conn) {
    echo "You are Connected";
} else {
    echo "Not Connected";
}
