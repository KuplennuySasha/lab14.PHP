<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
 /* Замініть нижченаведені змінні на свої */
 $host = "localhost"; // MYSQL server
 $user_db = "root"; // MYSQL користувач
 $pass_db = ""; // MYSQL пароль
 $dbase = "phone"; // MYSQL база даних
 $dtable = "tbl_phone"; // Таблиця в базі даних
 $charset="utf8";
 /* З'єднання з сервером бази даних */
 $dsn = "mysql:host=$host;dbname=$dbase;charset=$charset";
$opt = array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user_db, $pass_db, $opt);

 $stmt = $pdo->query('SELECT * FROM tbl_phone');
?>
 <table class="table">
<tr>
<td> id </td>
<td> Назва </td>
<td> Пароль </td>
<td> Вулиця </td>
</tr>
<?php
 while ($row = $stmt->fetch())
{
 ?>
<tr>
<td> <?php echo $row['id'] . "\n"; ?> </td>
<td> <?php echo $row['name'] . "\n"; ?> </td>
<td> <?php echo $row['phone'] . "\n"; ?> </td>
<td> <?php echo $row['street'] . "\n"; ?> </td>
</tr>
<?php
}
?>