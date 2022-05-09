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
      padding: 30px 20px;
   }

   p {
      margin-bottom: 10px;
   }

   .container {
      display: flex;
    width: 100%;
    justify-content: space-around;
   }
</style>

<body>
    <header>World of Movies</header>
    <main>
    <div class="container">
      <form action="select.php" method="post">
      <p>Жанр</p>
         <select name="genre">
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'Film');

            $query = 'SELECT * FROM `genre`';

            $result = mysqli_query($connection, $query);

            $res=mysqli_fetch_all ($result, MYSQLI_NUM);
            foreach($res as $name)
            echo "<option value='".$name[1]."'>".$name[1]."</option>";
            ?>

            ?>

            
         </select>
         <input type="submit" name="form1_submit" value="Поиск"><br>
         </form>

   
   <form action="select3.php" method="post">
      <p>Пример '2020-10-29'</p>
      <input type="text" name="user_date" />
      <input type="submit" name="form3_submit" value="Поиск"><br>
   </form>





      <form action="select2.php" method="post">
      <p>Актер</p>
         <select name="actor">
               <?php
               $connection = mysqli_connect('localhost', 'root', '', 'Film');

               $query = 'SELECT * FROM `actor`';

               $result = mysqli_query($connection, $query);

               $res=mysqli_fetch_all ($result, MYSQLI_NUM);
               foreach($res as $name)
               echo "<option value='".$name[1]."'>".$name[1]."</option>";
               ?>
         </select>
         <input type="submit" name="form2_submit" value="Поиск"><br>
      </form>
      </div>
    </main>



</body>
</html>
