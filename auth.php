<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phone";

$name=$_GET['name'];
$phone=$_GET['phone'];

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT phone FROM tbl_phone WHERE name='$name' && phone='$phone'";
    // use exec() because no results are returned
    foreach ($conn->query($sql) as $row) {
    if($row['phone'] == $phone)
    {
   echo <<<HTML
You have successfully logged in
<p><a href="main.html">Enter</a>
HTML;
}

    }

    }
    
  catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>