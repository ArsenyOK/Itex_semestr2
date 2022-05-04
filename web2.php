<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<style>
   * {
      margin: 0;
      padding: 0;
      font-family: Roboto, sans-serif;
   }

   body {
      background: yellow;
   }

   .block-data {
      margin: 50px 0;
   }

   .block-data ul{
      margin: 10px 0 10px 20px;
   }

   header {
      background: blue;
      padding: 10px 20px;
      color: #fff;
      font-size: 30px;
      text-align: center;
      text-transform: uppercase;
   }

   main {
      padding: 30px 0;
   }
</style>

<body>
    <header>World of Movies</header>
    <main>
    <div class="container">
      <form action="select.php" method="post">
         <label>Название жанра</label><input type="text" name="name" id="name"><br /><br />
         <input type="submit" value="Submit">
         <div className="block-data">
               <?php 
                  $connection = mysqli_connect('localhost', 'root', '', 'Film');

                  $name = mysqli_real_escape_string($connection, $_POST['name']);
                     if($name) {
                        $result = mysqli_query($connection, $query);

                  while($row = $result->fetch_assoc())
                  {
               ?>

               <?php
                  }
                  }
                  mysqli_close($connection);
               ?>
            </div>
         </form>
      </div>

    <div class="block-data">
        <h3>Фильмы с 2020-10-29 до нашого времени</h3>
        <ul>
        <?php  
               $connection = mysqli_connect('localhost', 'root', '', 'Film');

               $query = 'SELECT name FROM film WHERE date BETWEEN "2020-10-29" and CURRENT_DATE';
            
               $result = mysqli_query($connection, $query);

                 while($row = $result->fetch_assoc())
                {
             ?>
        <li>
            <?php echo  $row['name']; ?>
         </li>
        <?php
                }

                // закрываем соединение с базой
               mysqli_close($connection);
             ?>
        </ul>
    </div>
    

   <div class="container">
   <h3>Все фильмы с участием Лоретта Дивайн</h3>
    <div className="block-data">
        <?php   // LOOP TILL END OF DATA
               $connection = mysqli_connect('localhost', 'root', '', 'Film');

               // текст SQL запроса, который будет передан базе
               $query = 'SELECT f.name from film f, film_actor, actor a
               where ID_Film=FID_Film and FID_Actor=ID_Actor and a.name="Лоретта Дивайн";';
            
               // выполняем запрос к базе данных
                  $result = mysqli_query($connection, $query);

                 while($row = $result->fetch_assoc())
                {
             ?>
        <h4>
            <?php echo  $row['name']; ?>
        </h4>
        <?php
                }

                // закрываем соединение с базой
               mysqli_close($connection);
             ?>
    </div>
   </div>
    </main>



</body>
</html>