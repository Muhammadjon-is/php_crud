

<?php
require 'vendor/autoload.php';



// Load environment variables from the .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access variables
$host = $_ENV['HOSTNAME'];
$user = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];

// Use these variables in your database connection code
$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection Failed");
} else {
    echo "Yes, it is working";
}



?>
