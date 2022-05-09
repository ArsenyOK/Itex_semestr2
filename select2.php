<?php

$dbh = new PDO('mysql:host=localhost;dbname=Film', 'root', '');


$name = $_POST["actor"];
// $name = "Лоретта Дивайн"

$sth = $dbh->prepare('SELECT f.name from film f, film_actor, actor a
where ID_Film=FID_Film and FID_Actor=ID_Actor and a.name=?');
$sth->execute(array($name));
$res = $sth->fetchAll();

foreach ($res as $row) {
    print_r($row[0]);
}

?>