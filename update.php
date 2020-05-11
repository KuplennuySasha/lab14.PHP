<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phone";

$UpID=$_GET['UpID'];
$NewName=$_GET['NewName'];
$NewPhone=$_GET['NewPhone'];
$NewStreet=$_GET['NewStreet'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `tbl_phone` SET `name`='$NewName', `phone`='$NewPhone', 	`street`='$NewStreet'
    WHERE (id='$UpID')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "update successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>