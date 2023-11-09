<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "Pankie0417");
define("DATABASE", "crud_app_php");

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);


if (!$connection) {
    die("Connection Failed");
} else {"yes it is working";
}
