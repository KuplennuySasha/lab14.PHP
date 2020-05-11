<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phone";

$name=$_GET['name'];
$phone=$_GET['phone'];
$street=$_GET['street'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO tbl_phone (name, phone, street)
    VALUES ('$name', '$phone', '$street')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo <<<HTML
    
You have successfully registered
<p><a href="main.html">Enter</a>
    
HTML;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>