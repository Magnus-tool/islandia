<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "islandia";

    $connection = mysqli_connect($server, $user, $password, $database) or die("Błąd!");

    ?>
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
                while ($row = mysqli_fetch_array($t)) {

                    echo "<li>";
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
                while ($row = mysqli_fetch_array($t)) {

                    echo "<li>";
                    echo $row['nazwa'];
                    echo "</li>";

                }
                echo "</ol>";
                ?>
            </li>
        </ul>
    </aside>
    <main class="blok-gl">
        <h3 class="nagl-title">Galeria:</h3>
        <section class="blok-sek">
            <?php
            $q = mysqli_query($connection, "SELECT idObiekt, nazwa, plik FROM obiekty WHERE panstwo = 'Islandia'");
            while ($rob = mysqli_fetch_array($q)) {
               
                if (isset($rob['plik'])) {
                    echo "<a href='islandia.php?idObiekt=" . $rob['idObiekt'] . "'>";
                    echo "<img src='imgs/" . $rob['plik'] . "' alt='" . $rob['nazwa'] . "' title='" . $rob['nazwa'] . "'" . "' class='miniatura'>";
                    echo "</a>";
                }
            }


            ?>

        </section>
    </main>
    <footer>
        <hr>
        <p>Autor:1234567891011</p>
    </footer>
    <?php
    mysqli_close($connection);
    ?>
</body>

</html>