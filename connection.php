<?php
function getdb(){
$servername = "localhost";
$username = "iecsvdbphp";
$password = "Iecsvdbphp1@";
$db = "iecsvdbphp";
try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>
