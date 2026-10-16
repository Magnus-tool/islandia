<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header class="blok-nagl">
     <h1 class="nagl-title"> <a href="islandia.php" class="nagl-link"> Zwiedzaj Islandię </a> </h1>
    </header>
    <aside class="blok-bocz">
        <h3 class="bocz-title"> Do zwiedzania </h3>
        <ul class="bocz-list">
              <li class="bocz-li">
                <p>Wodospady:</p>
               <?php
               $t = mysqli_query($connection, "SELECT nazwa FROM obiekty WHERE idRodzaj = 10 LIMIT 3; ");
               echo "<ol>";
                while ($row = mysqli_fetch_array($t)){
               
               echo "<li>" ;
               echo $row['nazwa'];
               echo "</li>";
               
               }
               echo "</ol>";
               ?>

            </li>
            <li class="bocz-li">
                <p>Siedliska zwierząt:</p>
                 <?php
               $t = mysqli_query($connection, "SELECT nazwa FROM obiekty WHERE idRodzaj = 14 LIMIT 3;");
                 echo "<ol>";
                while ($row = mysqli_fetch_array($t)){
               
               echo "<li>" ;
               echo $row['nazwa'];
               echo "</li>";
               
               }
               echo "</ol>";
               ?>
            </li>
        </ul>
    </aside>
    <main class="blok-gl">
       <section class="blok-sek">
          
       </section>
    </main>
    <footer>
        <hr>
          <p>Autor:1234567891011</p>
    </footer>
</body>
</html>