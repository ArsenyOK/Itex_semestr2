<?php

$dbh = new PDO('mysql:host=localhost;dbname=Film', 'root', '');


$name = $_POST["genre"];

$sth = $dbh->prepare('SELECT f.name from film f, film_genre, genre g
where ID_Film=FID_Film and FID_Genre=ID_Genre and g.title=?');
$sth->execute(array($name));
$res = $sth->fetchAll();

foreach ($res as $row) {
    print_r($row[0]);
}

// $connection = mysqli_connect("localhost", "root", "", "Film");
 
// if($connection === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
 
// $name = mysqli_real_escape_string($connection, $_REQUEST['name']);

// $sql = 'SELECT f.name from film f, film_genre, genre g
//     where ID_Film=FID_Film and FID_Genre=ID_Genre and g.title="Ужасы"';

// $result = mysqli_query($connection, $sql);

//     while($row = $result->fetch_assoc())
//     {
//         echo  $row['name'];

//     }

// mysqli_close($link);
?>
