1
<?php

$dbh = new PDO('mysql:host=localhost;dbname=Film', 'root', '');


$data = $_POST["user_date"];
// $name = "Лоретта Дивайн"

$sth = $dbh->prepare('SELECT name from film where date BETWEEN ? and CURRENT_DATE');
$sth->execute(array($data));
$res = $sth->fetchAll();

foreach ($res as $row) {
    print_r($row[0]);
}

?>